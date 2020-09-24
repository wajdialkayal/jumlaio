<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Services\UsernameGeneratorService;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }

    
    public function index()
    {
        $user = auth()->user();
        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = $request->user();


        if ($request->email !== $user->email && $user instanceof MustVerifyEmail ) {
            $user->sendEmailVerificationNotification();
            $user->email_verified_at = null;
        }

        if (isset($request->photo)) {
            $user->updateProfilePhoto($request->photo);
        }

        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;

        if ($request->username !== $user->username) {
            $usernameGenerator = new UsernameGeneratorService();
            $user->username =  $usernameGenerator->setUsername($request->username);
        }
        $user->birthday = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');

        $user->private =  $request->private ? false : true;

        $user->save();

        return $request->wantsJson()
            ? new Response('Profile information updated successfully', 200)
            : back()->with('success', 'Profile information updated successfully');
    }

    public function removeImage(Request $request)
    {
        $request->user()->deleteProfilePhoto();
        return $request->wantsJson()
            ? new Response('Image removed', 200)
            : back()->with('success', 'Image removed');
    }
}
