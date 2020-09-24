<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Agent;

class SecurityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }
    public function index()
    {
        return view('security.index', [
            'sessions' => $this->getSessionsProperty()
        ]);
    }


    public function updatePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = $request->user();

        if (!$this->passwordCorrect($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => [__('Wrong Password')]
            ]);
        }
        $user->password = bcrypt($request->new_password);
        $user->save();

        return back()->with('success', __('Password has benn updated'));
    }

    public function twoFactorAuthentication(Request $request)
    {
        $user = $request->user();

        if (!$this->passwordCorrect($request->password, $user->password)) {
            return back()->with('error', __('Wrong password'));
        }
        $user->setTwoFactorAuth(!$user->two_factor_auth);
        return back(303);
    }


    public function emailAlert(Request $request)
    {
        $user = $request->user();

        if (!$this->passwordCorrect($request->password, $user->password)) {
            return back()->with('error', __('Wrong password'));
        }
        $user->setEmailAlert(!$user->email_alert);
        return back(303);
    }

    public function passwordCorrect(string $password, string $userPassword): bool
    {
        if (Hash::check($password, $userPassword)) {
            return true;
        }
        return false;
    }

    /**
     * Get the current sessions.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getSessionsProperty()
    {

        return collect(
            DB::table(config('session.table', 'sessions'))
                ->where('user_id', Auth::id())
                ->orderBy('last_activity', 'DESC')
                ->get()
        )->map(function ($session) {
            return (object) [
                'agent' => $this->createAgent($session),
                'ip_address' => $session->ip_address,
                'is_current_device' => $session->id === request()->session()->getId(),
                'last_active' => Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
            ];
        });
    }

    /**
     * Create a new agent instance from the given session.
     *
     * @param  mixed  $session
     * @return \Jenssegers\Agent\Agent
     */
    protected function createAgent($session)
    {
        return tap(new Agent, function ($agent) use ($session) {
            $agent->setUserAgent($session->user_agent);
        });
    }

    /**
     * Logout from other browser sessions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return \Inertia\Response
     */
    public function logoutOtherBrowserSessions(Request $request)
    {
        if (!$this->passwordCorrect($request->password,  $request->user()->password)) {
            return back()->with('error', __('Wrong password'));
        }
        Auth::logoutOtherDevices($request->password);
        $this->deleteOtherSessionRecords();
        return back(303);
    }

    /**
     * Delete the other browser session records from storage.
     *
     * @return void
     */
    protected function deleteOtherSessionRecords()
    {
        if (config('session.driver') !== 'database') {
            return;
        }
        DB::table(config('session.table', 'sessions'))
            ->where('user_id', Auth::user()->getKey())
            ->where('id', '!=', request()->session()->getId())
            ->delete();
    }


    public function deleteUser(Request $request)
    {
        $user = $request->user();

        if (!$this->passwordCorrect($request->password, $user->password)) {
            return back()->with('error', __('Wrong password'));
        }
        if ($user->delete()) {
            return redirect()->route('home')->with('success', __('Your account has been deleted!'));
        }
        return back()->with('error', __('Error deleting'));
    }
}
