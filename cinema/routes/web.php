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

use App\Filme;
use App\Sessao;
use App\Elenco;

Route::group(['prefix' => 'cinema'], function(){
	Route::get('/', function () {
	    return view('templates_welcome/main');
	});
	Route::group(['prefix' => 'filmes'], function(){
		Route::get('/', 'FilmeController@all');

		Route::get('/novo', 'FilmeController@newFilme');
		Route::post('/novo', 'FilmeController@create');
		
		Route::get('/editar/{id}', 'FilmeController@atualizar');
		Route::post('/editar/{id}', 'FilmeController@update');

		Route::get('/deletar/{id}', 'FilmeController@delete');
	});
	
	Route::group(['prefix' => 'elencos'], function(){
		Route::get('/', 'ElencoController@all');

		Route::get('/novo', 'ElencoController@newElenco');
		Route::post('/novo', 'ElencoController@create');
		
		Route::get('/editar/{id}', 'ElencoController@atualizar');
		Route::post('/editar/{id}', 'ElencoController@update');
		Route::get('/editar/addFilme/{id_filme}/{id_elenco}', 'ElencoController@addFilme');		
		Route::get('/editar/deleteFilme/{id_filme}/{id_elenco}', 'ElencoController@deleteFilme');

		Route::get('/deletar/{id}', 'ElencoController@delete');
	});

	Route::group(['prefix' => 'sessoes'], function(){
		Route::get('/', 'SessaoController@all');
		Route::get('/comprarIngresso/{id}', 'SessaoController@comprarIngresso');

		Route::get('/novo', 'SessaoController@newSessao');
		Route::post('/novo', 'SessaoController@create');
		
		Route::get('/editar/{id}', 'SessaoController@update');
		Route::post('/editar/{id}', 'SessaoController@atualizar');

		Route::get('/deletar/{id}', 'SessaoController@delete');
	});
	Auth::routes();
});

