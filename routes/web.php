<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;
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

Route::get('/helloworld', [App\Http\Controllers\HelloWorld::class, 'sayHello']);

Route::get('/index', [App\Http\Controllers\ProductController::class, 'indexProduct']);
Route::get('/edit', [App\Http\Controllers\ProductController::class, 'editProduct']);
Route::get('/create', [App\Http\Controllers\ProductController::class, 'createProduct']);
