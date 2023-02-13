<?php

use App\Http\Controllers\EventsController;
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


Route::get('/', [EventsController::class, 'index'])->name('welcome');
Route::get('/produtos', [EventsController::class, 'products'])->name('products');
Route::get('/contato', [EventsController::class, 'contact'])->name('contact');
Route::get('/venda', [EventsController::class, 'create'])->name('create');
