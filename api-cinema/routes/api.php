<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
use App\Filme;
use App\Elenco;
use App\Sessao;

Route::group(['prefix' => 'api-cinema'], function(){
	Route::post('/auth/login', 'LoginController@authenticate');

	Route::group(['prefix' => 'sessao'], function(){
		Route::get('/all', 'SessaoController@index');
		Route::get('/create', 'SessaoController@store');
		Route::get('/update/{id}', 'SessaoController@update');//get ou post
		Route::get('/delete/{id}', 'SessaoController@destroy');
	});

	Route::group(['prefix' => 'filme'], function(){		
		Route::get('/all', 'FilmeController@index');
		Route::get('/create', 'FilmeController@store');
		Route::get('/update/{id}', 'FilmeController@update');//get ou post
		Route::get('/delete/{id}', 'FilmeController@destroy');
	});

	Route::group(['prefix' => 'elenco'], function(){		
		Route::get('/all', 'ElencoController@index');
		Route::get('/create', 'ElencoController@store');
		Route::get('/update/{id}', 'ElencoController@update');//get ou post
		Route::get('/delete/{id}', 'ElencoController@destroy');
	});
});
