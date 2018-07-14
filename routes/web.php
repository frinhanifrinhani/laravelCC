<?php
Route::get('/',function(){
	return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('outralogica',function(){
	return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('testerota',function(){
	return 'teste rota';
});

Route::get('testerota/comid',function(){
	return 'teste rota comid';
});