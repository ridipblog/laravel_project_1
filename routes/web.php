<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', [PostController::class, 'show_post']);
Route::get('/insert', [PostController::class, 'insert']);
Route::get('/update', [PostController::class, 'update']);
Route::get('/delete', [PostController::class, 'delete']);
Route::get('/destroy', [PostController::class, 'destroy']);
Route::get('/soft-delete', [PostController::class, 'softDelete']);
Route::get('/read-of-delete', [PostController::class, 'readOfDelete']);
Route::get('/restore', [PostController::class, 'restore']);
