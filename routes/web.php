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
    $nome = 'carlos';
    $idade = 19;

    return view('welcome',['nome' => $nome, 'idade' => $idade, 'profissao' => 'programador'] );
});
Route::get('/produtos_teste/{id?}', function($id){
    return view('products', ['id' => $id]);
});
Route::get('/produtos', function () {
    return view('products');
});
Route::get('/contato', function () {
    return view('contact');
});

