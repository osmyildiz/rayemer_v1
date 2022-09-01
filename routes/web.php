<?php

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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
Route::get('/index.html', [App\Http\Controllers\HomeController::class, 'homepage'])->name('index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
Route::get('/hakkimizda', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/iletisim', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/kurs/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'course'])->name('course');
Route::get('/ozel-ders', [App\Http\Controllers\HomeController::class, 'private_lesson'])->name('private_lesson');
Route::post('/mesaj-gonder', [App\Http\Controllers\HomeController::class, 'send_form'])->name('send_form');
Route::post('/send_test', [App\Http\Controllers\HomeController::class, 'send_test'])->name('send_test');
