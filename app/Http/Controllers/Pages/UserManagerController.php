<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManagerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }

    public function index($id)
    {
        $page = Page::with([
            'users',
        ])->whereHas('users', function ($query) {
                $query->where('user_id', Auth::id());
            })->findOrFail($id);

        $roles = Role::where('id', '!=', Role::OWNER)->orderBy('id', 'ASC')->get();

        return view('pages.users.index', [
            'page' => $page,
            'roles' => $roles,
        ]);
    }


    public function searchUser($email)
    {
        return User::where('email', $email)->firstOrFail();
    }


    public function addUser(Page $page, Request $request)
    {
        $user_role = $page->users->find(Auth::id())->pivot->role_id;
      
        if ( $user_role == Role::OWNER) {
            $user = User::where('email', $request->email)->firstOrFail();
            if (!$user->pages->contains($page->id)) {

                $user->pages()->attach($page->id, array('role_id' => $request->role_id));
                return back()->with('success', 'User added to this page');
            }
            return back()->with('error', 'User already added to this page');
        }
        return back()->with('error', 'Unautherized action, You do not have permission to this action ');
    }

    public function removeUser(Page $page, User $user)
    {
        
        $user_role = $page->users->find(Auth::id())->pivot->role_id;
        if ( $user_role == Role::OWNER) {
            $user->pages()->detach($page->id);
            return back()->with('success', 'User removed to this page');
        }
        return back()->with('error', 'Unautherized action, You do not have permission to this action ');
    }
}
