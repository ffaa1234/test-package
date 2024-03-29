<?php

use Khonelia\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
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


Route::get('/contact', [ContactController::class, 'contactGet'])->name('contact.get');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contact.post');
