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
});

Route::group(['prefix' => 'user', 'middleware' => ['user','auth'], 'namespace' => 'User'],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('updateProfile',[UserController::class,'updateProfile'])->name('update.profile');
    Route::get('imageForm', [UserController::class, 'imageForm'])->name('image.form');
    Route::post('imageUpload', [UserController::class, 'imageUpload'])->name('image.upload');
    Route::get('passwordForm', [UserController::class, 'passwordForm'])->name('password.form');
    Route::post('passwordUpdate', [UserController::class, 'passwordUpdate'])->name('password.update');
});
