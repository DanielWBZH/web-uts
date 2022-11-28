<?php

use App\Http\Controllers\bookcon;
use App\Http\Controllers\categorycon;
use App\Http\Controllers\publishercon;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [bookcon::class, 'all']);
Route::get('/book/{id}', [bookcon::class, 'view']);
Route::get('/contact', [bookcon::class, 'contact']);
Route::get('/category/{id}', [categorycon::class, 'view']);
Route::get('/publisher', [publishercon::class, 'index']);
Route::get('/publisher/{id}', [publishercon::class, 'show']);
