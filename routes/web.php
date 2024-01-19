<?php

use App\Models\Ppdis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdisController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PpdisController::class, 'home']);
Route::get('/contact', [PpdisController::class, 'contact']);
Route::get('/register', [PpdisController::class, 'register'])->name('register');
Route::post('/register', [PpdisController::class, 'inputRegister'])->name('register.post');
Route::get('/login', [PpdisController::class, 'login']);
Route::post('/login', [PpdisController::class, 'auth'])->name('login.auth');


Route::get('/dashboard', [PpdisController::class, 'dashboard']);
Route::get('/admin', [PpdisController::class, 'admin']);


Route::get('/logout', [PpdisController::class, 'logout']);
