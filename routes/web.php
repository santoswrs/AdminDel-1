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
Route::get('home',['uses' => 'Controller@homepage']);

Route::get('login',['uses' => 'Controller@login']);

//Rotas de laboratorio
Route::get('labs',['uses' => 'Controller@labs']);
// Route::get('labs',['uses' => 'Controller@labs']);

Route::get('sala',['uses' => 'Controller@sala']);


Route::get('sobre',['uses' => 'Controller@sobre']);


Route::group(['prefix' =>'/'], function(){
    Route::group(['prefix' => '/api'], function(){
        Route::get      ('professor',       'Api\\ProfessorApiController@all');
        Route::get      ('professor/{id}',  'Api\\ProfessorApiController@get');
        Route::put      ('professor/{id}',  'Api\\ProfessorApiController@update');
        Route::delete   ('professor/{id}',  'Api\\ProfessorApiController@delete');

    });
    Route::group(['prefix' => 'painel'], function(){
        Route::get('professor', function(){ return view('painel/professor'); });
    });
});
