<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/produto_tipo',
], function () {
  Route::get('', 'ProdutoTipo@page')->middleware('ability:produto_tipo:show');
  Route::get('get', 'ProdutoTipo@get')->middleware('ability:produto_tipo:show');
  Route::post('create', 'ProdutoTipo@create')->middleware('ability:produto_tipo:create');
  Route::post('update', 'ProdutoTipo@update')->middleware('ability:produto_tipo:update');
  Route::post('cancel', 'ProdutoTipo@cacel')->middleware('ability:produto_tipo:cancel');
  Route::delete('delete', 'ProdutoTipo@delete')->middleware('ability:produto_tipo:delete');
});