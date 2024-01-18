<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'create']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::post('/thanks', [ContactController::class, 'thanks']);
Route::get('/login', function () {
    return view('login');
})->middleware('guest:admin');
Route::post('/login', [LoginController::class, 'admin'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', function(){
    return view('register');
})->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('auth')->name('register');
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin', [ContactController::class, 'admin']);


