<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashBoardController::class, 'index'])->name('dashboard');

    Route::get('/add-category',[CategoryController::class, 'index'])->name('add-category');
    Route::post('/new-category',[CategoryController::class, 'create'])->name('new-category');
    Route::get('/edit-category/{id}',[CategoryController::class, 'edit'])->name('edit-category');
    Route::post('/update-category/{id}',[CategoryController::class, 'update'])->name('update-category');
    Route::get('/delete-category/{id}',[CategoryController::class, 'delete'])->name('delete-category');
    Route::get('/manage-category',[CategoryController::class, 'manage'])->name('manage-category');

    Route::get('/add-subcategory',[SubCategoryController::class, 'index'])->name('add-subcategory');
    Route::post('/new-subcategory',[SubCategoryController::class, 'create'])->name('new-subcategory');
    Route::get('/edit-subcategory/{id}',[SubCategoryController::class, 'edit'])->name('edit-subcategory');
    Route::post('/update-subcategory/{id}',[SubCategoryController::class, 'update'])->name('update-subcategory');
    Route::get('/delete-subcategory/{id}',[SubCategoryController::class, 'delete'])->name('delete-subcategory');
    Route::get('/manage-subcategory',[SubCategoryController::class, 'manage'])->name('manage-subcategory');

    Route::get('/add-brand',[BrandController::class, 'index'])->name('add-brand');
    Route::post('/new-brand',[BrandController::class, 'create'])->name('new-brand');
    Route::get('/edit-brand/{id}',[BrandController::class, 'edit'])->name('edit-brand');
    Route::post('/update-brand/{id}',[BrandController::class, 'update'])->name('update-brand');
    Route::get('/delete-brand/{id}',[BrandController::class, 'delete'])->name('delete-brand');
    Route::get('/manage-brand',[BrandController::class, 'manage'])->name('manage-brand');

    Route::get('/add-unit',[UnitController::class, 'index'])->name('add-unit');
    Route::post('/new-unit',[UnitController::class, 'create'])->name('new-unit');
    Route::get('/edit-unit/{id}',[UnitController::class, 'edit'])->name('edit-unit');
    Route::post('/update-unit/{id}',[UnitController::class, 'update'])->name('update-unit');
    Route::get('/delete-unit/{id}',[UnitController::class, 'delete'])->name('delete-unit');
    Route::get('/manage-unit',[UnitController::class, 'manage'])->name('manage-unit');

    Route::get('/manage-user',[UserController::class, 'manage'])->name('manage-user');
    Route::get('/delete-user/{id}',[UserController::class, 'delete'])->name('delete-user');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile');
    Route::get('/error',[ErrorController::class, 'index'])->name('error');

});
