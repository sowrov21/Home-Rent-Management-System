<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\ApartmentImageController;
use App\Http\Controllers\RentController;

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

 Route::get('/', [FrontendController::class,'index']);
 Route::get('/all-apartment', [FrontendController::class,'allApartmets']);

// Route::get('/', [RentController::class,'index']);

Route::prefix('rent')->group(function (){

   
    Route::get('cart',[RentController::class,'cart'])->name('rent.cart');
    Route::post('store',[RentController::class,'store'])->name('rent.store');
    Route::get('addToCart/{apartment}',[RentController::class,'addToCart'])->name('rent.addToCart');
    Route::post('update/{id}',[RentController::class,'update'])->name('rent.update');
    Route::get('show/{id}',[RentController::class,'show'])->name('rent.show');
    Route::get('delete/{id}',[RentController::class,'destroy'])->name('rent.destroy');
    Route::get('checkout',[RentController::class,'checkout'])->name('rent.checkout');
    
    
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

//Roles
Route::get('all-roles',[RoleController::class,'allUser'])->name('Role.allUser');
Route::get('create-role',[RoleController::class,'createRole'])->name('Role.createRole');
Route::post('store-role',[RoleController::class,'storeRole'])->name('Role.storeRole');
Route::get('delete-role/{id}',[RoleController::class,'destroyRole'])->name('Role.destroyRole');
Route::get('edit-role/{id}', [RoleController::class, 'editRole'])->name('Role.editRole');
Route::post('update-role/{id}', [RoleController::class, 'updateRole'])->name('Role.updateRole');
Route::get('details-role/{id}', [RoleController::class, 'detailsRole'])->name('Role.detailsRole');


//tags
Route::prefix('tags')->group(function (){

Route::get('/',[TagController::class,'index'])->name('tag.index');
Route::get('create',[TagController::class,'create'])->name('tag.create');
Route::post('store',[TagController::class,'store'])->name('tag.store');
Route::get('edit/{id}',[TagController::class,'edit'])->name('tag.edit');
Route::post('update/{id}',[TagController::class,'update'])->name('tag.update');
Route::get('show/{id}',[TagController::class,'show'])->name('tag.show');
Route::delete('delete/{id}',[TagController::class,'destroy'])->name('tag.destroy');


});

//apartments
Route::prefix('apartments')->group(function (){

Route::get('/',[ApartmentController::class,'index'])->name('apartment.index');
Route::get('create',[ApartmentController::class,'create'])->name('apartment.create');
Route::post('store',[ApartmentController::class,'store'])->name('apartment.store');
Route::get('edit/{id}',[ApartmentController::class,'edit'])->name('apartment.edit');
Route::post('update/{id}',[ApartmentController::class,'update'])->name('apartment.update');
Route::get('show/{id}',[ApartmentController::class,'show'])->name('apartment.show');
Route::delete('delete/{id}',[ApartmentController::class,'destroy'])->name('apartment.destroy');


});

//location
Route::prefix('locations')->group(function (){

    Route::get('/',[LocationController::class,'index'])->name('location.index');
    Route::get('create',[LocationController::class,'create'])->name('location.create');
    Route::post('store',[LocationController::class,'store'])->name('location.store');
    Route::get('edit/{id}',[LocationController::class,'edit'])->name('location.edit');
    Route::post('update/{id}',[LocationController::class,'update'])->name('location.update');
    Route::get('show/{id}',[LocationController::class,'show'])->name('location.show');
    Route::delete('delete/{id}',[LocationController::class,'destroy'])->name('location.destroy');
    
});  


//apartment_image
Route::prefix('apartment-image')->group(function (){

    Route::get('/{id}',[ApartmentImageController::class,'index'])->name('apartment_image.index');
    Route::get('create',[ApartmentImageController::class,'create'])->name('apartment_image.create');
    Route::post('store',[ApartmentImageController::class,'store'])->name('apartment_image.store');
    Route::get('edit/{id}',[ApartmentImageController::class,'edit'])->name('apartment_image.edit');
    Route::post('update/{id}',[ApartmentImageController::class,'update'])->name('apartment_image.update');
    Route::get('show/{id}',[ApartmentImageController::class,'show'])->name('apartment_image.show');
    Route::delete('delete/{id}',[ApartmentImageController::class,'destroy'])->name('apartment_image.destroy');
    
}); 

require __DIR__.'/auth.php';
