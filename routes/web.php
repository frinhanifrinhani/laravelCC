<?php
Route::get('/',function(){
	return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/produtos','ProdutoController@lista');

//Route::get('/produtos/mostra','ProdutoController@mostra');
//Route::get('/produtos/mostra/{id}','ProdutoController@mostra');
Route::get(
	'/produtos/mostra/{id}',
	'ProdutoController@mostra'
)
->where('id','[0-9]+');
	
Route::get(
	'/produtos/novo',
	'ProdutoController@novo'
);

Route::get(
	'/produtos/adiciona',
	'ProdutoController@adiciona'
);