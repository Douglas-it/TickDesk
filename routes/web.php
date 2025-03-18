<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//admin
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
