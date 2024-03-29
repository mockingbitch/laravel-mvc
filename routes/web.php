<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::post('/index', [HomeController::class, 'handleNumber'])->name('post');

//Product
Route::get('/product', [ProductController::class, 'createView'])->name('createView');
Route::post('/product', [ProductController::class, 'storeData'])->name('storeData');
Route::get('/list-product', [ProductController::class, 'listProduct'])->name('listProduct');

