<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;

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
    return view('home');
});

Route::view('/admin', 'admins.login');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/userlist', [AdminController::class, 'index']);
Route::get('/edituser/{id}', [AdminController::class, 'edit']);
Route::put('/update/{id}', [AdminController::class, 'update']);
Route::delete('/deleteuser/{id}', [AdminController::class, 'destroy']);


// Route::get('/userRecord', [ApiController::class, 'index']);