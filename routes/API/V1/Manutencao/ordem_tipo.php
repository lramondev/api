<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Manutencao',
  'middleware' => 'auth:sanctum',
  'prefix' => 'manutencao/ordem',
], function () {
  Route::get('', 'OrdemTipo@page')->middleware('ability:ordem_tipo:show');
  Route::get('get', 'OrdemTipo@get')->middleware('ability:ordem_tipo:show');
  Route::post('create', 'OrdemTipo@create')->middleware('ability:ordem_tipo:create');
  Route::post('update', 'OrdemTipo@update')->middleware('ability:ordem_tipo:update');
  Route::post('cancel', 'OrdemTipo@cacel')->middleware('ability:ordem_tipo:cancel');
  Route::delete('delete', 'OrdemTipo@delete')->middleware('ability:ordem_tipo:delete');
});