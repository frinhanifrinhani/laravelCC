<?php

Route::get(
	'/produtos/mostra/{id}',
	'ProdutoController@mostra'
)
->where('id','[0-9]+');
	
Route::get(
	'/produtos/novo',
	'ProdutoController@novo'
);

Route::post(
	'/produtos/adiciona',
	'ProdutoController@adiciona'
);

Route::get('/produtos/json','ProdutoController@listaJson');

Route::get('/produtos/remove/{id}','ProdutoController@remove');

Route::get('/produtos/edita/{id}','ProdutoController@edita');

Route::middleware([
	'auth' => 'Auth/AuthController',
	'password' => 'Auth/PasswordController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos','ProdutoController@lista');