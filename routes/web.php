<?php

use App\Http\Controllers\Auth\TwoFactorAuthenticationController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Security\SecurityController;
use App\Models\Page;
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


Route::prefix('security')->group(function () {
    Route::get('/', [SecurityController::class, 'index'])->name('security');
    Route::delete('logout-other-browser-sessions', [SecurityController::class, 'logoutOtherBrowserSessions'])->name('security.logout_other_browser_sessions');
    Route::put('two-factor-authentication/setup', [SecurityController::class, 'twoFactorAuthentication'])->name('security.two_factor_authentication.setup');
    Route::put('email/alert/setup', [SecurityController::class, 'emailAlert'])->name('security.email_alert.setup');
    Route::put('password/update', [SecurityController::class, 'updatePassword'])->name('security.password.update');
    Route::put('user/delete', [SecurityController::class, 'deleteUser'])->name('security.user.delete');
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
    // Route::post('/', [TwoFactorAuthenticationController::class, 'store'])->name('verification.two_factor.store');
    // Route::get('resend', [TwoFactorAuthenticationController::class, 'resend'])->name('verification.two_factor.resend');
});


Route::get('/page/{subdomain}', function($subdomain){
    $page = Page::with('banners')->where('subdomain', $subdomain)->firstOrFail();
    return view('page.index',[
        'page' => $page
    ]);
});


// Route::domain('{subdomain}.'.config('app.short_url'))->group(function(){
//     Route::get('/', [PageController::class, 'show'])->name('pages.show');
// });