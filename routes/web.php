<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventContronller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AbateController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [EventContronller::class, 'index'])->name('event');
Route::get('event/info', [EventContronller::class, 'info'])->name('event.info');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/abate', [AbateController::class, 'index'])->name('abate');
Route::get('/abate/success', [AbateController::class, 'success'])->name('abate.succes');

