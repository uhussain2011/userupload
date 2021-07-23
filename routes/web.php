<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userPhotos', [App\Http\Controllers\HomeController::class, 'userPhotos'])->name('userPhotos');




//Upload file post route
//Basic request file. 
Route::post('/Upload', [App\Http\Controllers\UserController::class, 'uploadPhoto'])->name('uploadphoto');