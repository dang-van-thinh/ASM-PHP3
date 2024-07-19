<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//
//    return view('layout.main');
//});

// ADMIN
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/add', [NewsController::class, 'create'])->name('news.add');
    Route::post('/news/store',[NewsController::class,'store'])->name('news.store');
    Route::get('/news/detail/{id}', [NewsController::class, 'detail'])->name('news.detail');
    Route::get('/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
    Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');


    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/detail/{id}',[CategoryController::class,'detail'])->name('category.detail');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
});

//
//
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/news/{id}',[HomeController::class,'detail'])->name('home.detail');
Route::get('/search',[HomeController::class,'search'])->name('home.search');
