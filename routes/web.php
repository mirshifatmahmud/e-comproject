<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\SubCategoryController;
use App\Http\Controllers\Admin\Category\SubSubCategoryController;
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

// ==================================admin route===========================================================
Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'namespace' => 'Admin'],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //admin profile
    Route::get('profileForm',[AdminController::class,'profileForm'])->name('admin.profile.form');
    Route::post('profileUpdate',[AdminController::class,'profileUpdate'])->name('admin.profile.update');
    Route::get('imageForm', [AdminController::class, 'imageForm'])->name('admin.image.form');
    Route::post('imageUpload', [AdminController::class, 'imageUpload'])->name('admin.image.upload');
    Route::get('passwordForm', [AdminController::class, 'passwordForm'])->name('admin.password.form');
    Route::post('passwordUpdate', [AdminController::class, 'passwordUpdate'])->name('admin.password.update');

    //brand crud
    Route::get('brands',[BrandController::class,'index'])->name('brand');
    Route::post('brandStore',[BrandController::class,'brandStore'])->name('brand.store');
    Route::get('brandEdit/{id}',[BrandController::class,'brandEdit'])->name('brand.edit');
    Route::put('brandUpdate',[BrandController::class,'brandUpdate'])->name('brand.update');
    Route::delete('brandDelete/{id}',[BrandController::class,'brandDelete'])->name('brand.delete');

    //category crud
    Route::get('categories',[CategoryController::class,'index'])->name('category');
    Route::post('categoryStore',[CategoryController::class,'categoryStore'])->name('category.store');
    Route::get('categoryEdit/{id}',[CategoryController::class,'categoryEdit'])->name('category.edit');
    Route::put('categoryUpdate',[CategoryController::class,'categoryUpdate'])->name('category.update');
    Route::delete('categoryDelete/{id}',[CategoryController::class,'categoryDelete'])->name('category.delete');

    //subcategory crud
    Route::get('subCategories',[SubCategoryController::class,'index'])->name('subCategory');
    Route::post('subCategoryStore',[SubCategoryController::class,'subCategoryStore'])->name('subCategory.store');
    Route::get('subCategoryEdit/{id}',[SubCategoryController::class,'subCategoryEdit'])->name('subCategory.edit');
    Route::put('subCategoryUpdate',[SubCategoryController::class,'subCategoryUpdate'])->name('subCategory.update');
    Route::delete('subCategoryDelete/{id}',[SubCategoryController::class,'subCategoryDelete'])->name('subCategory.delete');

    //sub subcategory crud
    Route::get('sub-subCategories',[SubSubCategoryController::class,'index'])->name('sub.subCategory');
    Route::get('subCategory/ajax/{cat_id}',[SubSubCategoryController::class,'getSubCat']);
    Route::post('sub-subCategoryStore',[SubSubCategoryController::class,'subSubCategoryStore'])->name('sub.subCategory.store');

    Route::get('sub-subCategoryEdit/{id}',[SubSubCategoryController::class,'subSubCategoryEdit'])->name('sub.subCategory.edit');
    Route::put('sub-subCategoryUpdate',[SubSubCategoryController::class,'subSubCategoryUpdate'])->name('sub.subCategory.update');
    Route::delete('sub-subCategoryDelete/{id}',[SubSubCategoryController::class,'subSubCategoryDelete'])->name('sub.subCategory.delete');


});

// ================================================user route============================================
Route::group(['prefix' => 'user', 'middleware' => ['user','auth'], 'namespace' => 'User'],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

    //user profile
    Route::post('updateProfile',[UserController::class,'updateProfile'])->name('update.profile');
    Route::get('imageForm', [UserController::class, 'imageForm'])->name('image.form');
    Route::post('imageUpload', [UserController::class, 'imageUpload'])->name('image.upload');
    Route::get('passwordForm', [UserController::class, 'passwordForm'])->name('password.form');
    Route::post('passwordUpdate', [UserController::class, 'passwordUpdate'])->name('password.update');
});
