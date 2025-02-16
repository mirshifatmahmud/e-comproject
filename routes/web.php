<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('fontend.index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'namespace' => 'Admin'],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //admin profile
    Route::get('profileForm',[AdminController::class,'profileForm'])->name('admin.profile.form');
    Route::post('profileUpdate',[AdminController::class,'profileUpdate'])->name('admin.profile.update');
    Route::get('imageForm', [AdminController::class, 'imageForm'])->name('admin.image.form');
    Route::post('imageUpload', [AdminController::class, 'imageUpload'])->name('admin.image.upload');
    Route::get('passwordForm', [AdminController::class, 'passwordForm'])->name('admin.password.form');
    Route::post('passwordUpdate', [AdminController::class, 'passwordUpdate'])->name('admin.password.update');

});

Route::group(['prefix' => 'user', 'middleware' => ['user','auth'], 'namespace' => 'User'],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    //user profile
    Route::post('updateProfile',[UserController::class,'updateProfile'])->name('update.profile');
    Route::get('imageForm', [UserController::class, 'imageForm'])->name('image.form');
    Route::post('imageUpload', [UserController::class, 'imageUpload'])->name('image.upload');
    Route::get('passwordForm', [UserController::class, 'passwordForm'])->name('password.form');
    Route::post('passwordUpdate', [UserController::class, 'passwordUpdate'])->name('password.update');
});
