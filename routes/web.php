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

Route::get('/login',['uses' => 'Controller@login']);
// Route::get('', function () {
//     return view('welcome');
// });
// Route::get('/ola', function() {
//     return view('saida');
// });
Route::get('labs',['uses' => 'Controller@labs']);

Route::get('home',['uses' => 'Controller@homepage']);

// Route::get('e',['uses' => '/Entidades@impressao']); //nao encontro o caminho
