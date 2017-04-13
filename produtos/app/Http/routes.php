<?php

Route::get('/', function()
{
  return '<h1>To Do list/h1>';
});

Route::get('/list', 'ListaController@lista');
Route::get('/list/mostra/{id}', 'ListaController@mostra'); 
Route::get('/list/novo', 'ListaController@novo'); 
Route::post('/list/adiciona', 'ListaController@adiciona'); 
Route::get('/list/remove/{id}', 'ListaController@remove'); 
