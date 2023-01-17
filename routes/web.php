<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ErrorController;

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
    Route::get('/manage-subcategory',[SubCategoryController::class, 'manage'])->name('manage-subcategory');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile');
    Route::get('/error',[ErrorController::class, 'index'])->name('error');

});
