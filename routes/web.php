<?php

use App\Http\Controllers\Auth\TwoFactorAuthenticationController;
use App\Http\Controllers\PageMainController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Pages\PostController;
use App\Http\Controllers\Pages\UserManagerController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\User\ExploreController;
use App\Http\Controllers\User\TrendingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::put('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('image/remove', [ProfileController::class, 'removeImage'])->name('profile.image.remove');
});


Route::prefix('security')->middleware(['auth', 'twofactorAuthentication', 'locale'])->group(function () {
    Route::get('/', [\App\Http\Controllers\User\SecurityController::class, 'index'])->name('security');
    Route::delete('logout-other-browser-sessions', [\App\Http\Controllers\User\SecurityController::class, 'logoutOtherBrowserSessions'])->name('security.logout_other_browser_sessions');
    Route::put('two-factor-authentication/setup', [\App\Http\Controllers\User\SecurityController::class, 'twoFactorAuthentication'])->name('security.two_factor_authentication.setup');
    Route::put('email/alert/setup', [\App\Http\Controllers\User\SecurityController::class, 'emailAlert'])->name('security.email_alert.setup');
    Route::put('password/update', [\App\Http\Controllers\User\SecurityController::class, 'updatePassword'])->name('security.password.update');
    Route::put('user/delete', [\App\Http\Controllers\User\SecurityController::class, 'deleteUser'])->name('security.user.delete');
});

Route::prefix('two-factor-authentication')->group(function () {
    Route::get('/', [TwoFactorAuthenticationController::class, 'index'])->name('verification.two_factor.index');
    Route::post('/', [TwoFactorAuthenticationController::class, 'store'])->name('verification.two_factor.store');
    Route::get('resend', [TwoFactorAuthenticationController::class, 'resend'])->name('verification.two_factor.resend');
});


Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('pages.index');
    Route::get('create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/', [PageController::class, 'store'])->name('pages.store');
    Route::delete('{page}', [PageController::class, 'destroy'])->name('pages.destroy');
    Route::get('/{page}', [PageController::class, 'show'])->name('pages.show');

    Route::get('/{page}/users', [UserManagerController::class, 'index'])->name('pages.users.index');
    Route::post('{page}/users/store', [UserManagerController::class, 'addUser'])->name('pages.users.store');
    Route::delete('{page}/users/{user}/destroy', [UserManagerController::class, 'removeUser'])->name('pages.users.destroy');

    Route::get('/{page}/posts', [PostController::class, 'index'])->name('pages.posts.index');
    
    Route::get('/{page}/posts/all', [PostController::class, 'pagePostsAll'])->name('pages.posts.all');
    
    Route::get('/{page}/posts/create', [PostController::class, 'create'])->name('pages.posts.create');
    Route::post('/{page}/posts', [PostController::class, 'store'])->name('pages.posts.store');
    Route::get('/{page}/posts/{post}', [PostController::class, 'edit'])->name('pages.posts.edit');
    Route::put('/{page}/posts/{post}', [PostController::class, 'update'])->name('pages.posts.update');
    Route::delete('/{page}/posts/{post}', [PostController::class, 'destroy'])->name('pages.posts.destroy');
    Route::put('/{page}/posts/{post}/status', [PostController::class, 'changeStatus'])->name('pages.posts.update.status');
    Route::put('/{page}/posts/{post}/pin_status', [PostController::class, 'changePinStatus'])->name('pages.posts.update.pin_status');
});

Route::get('/users/search/{email}', [UserManagerController::class, 'searchUser'])->name('users.search');


Route::get('/page/{subdomain}', [PageMainController::class, 'index'])->name('page.index');
Route::get('/page/{subdomain}/post/{slug}', [PageMainController::class, 'show'])->name('page.post.show');
Route::get('/page/{subdomain}/contact', [PageMainController::class, 'contact'])->name('page.contact');
Route::get('/page/{subdomain}/about', [PageMainController::class, 'about'])->name('page.about');

Route::get('explore', [ExploreController::class, 'index'])->name('explore');
Route::get('trending', [TrendingController::class, 'index'])->name('trending');
// Route::domain('{subdomain}.'.config('app.short_url'))->group(function(){
//     Route::get('/', [PageController::class, 'show'])->name('pages.show');
// });