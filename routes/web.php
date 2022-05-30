<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\SocialController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function () {
        //Profile
        Route::get('/profile-overview', function () {
            return view('backend.admin.profile.profile-overview');
        })->name('admin.profile-overview');
        
        Route::get('/profile-settings', function () {
            return view('backend.admin.profile.profile-settings');
        })->name('admin.profile.settings');
        //Role
        Route::get('/roles', [RoleController::class,'index'])->name('role.index');

        //User
        Route::get('/all-users', [UserController::class,'index'])->name('user.index');
        Route::get('/show/{id}', [UserController::class,'show'])->name('user.show');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
        
     });

});

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

require __DIR__.'/auth.php';
