<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\PianoController;

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
    return view('principal');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/aprende-a-tocar-el-piano', [ChatController::class,'index'])->name('chatspiano');
Route::post('/aprende-a-tocar-el-piano', [ChatController::class,'store']);

Route::get('/dashboardchats', [PostController::class, 'index'])->name('posts.index');











