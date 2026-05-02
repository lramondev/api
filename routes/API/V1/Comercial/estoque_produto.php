<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/estoque_produto',
], function () {
  Route::get('', 'EstoqueProduto@page')->middleware('ability:estoque_produto:show');
  Route::get('get', 'EstoqueProduto@get')->middleware('ability:estoque_produto:show');
  Route::post('create', 'EstoqueProduto@create')->middleware('ability:estoque_produto:create');
  Route::post('update', 'EstoqueProduto@update')->middleware('ability:estoque_produto:update');
  Route::post('cancel', 'EstoqueProduto@cacel')->middleware('ability:estoque_produto:cancel');
  Route::delete('delete', 'EstoqueProduto@delete')->middleware('ability:estoque_produto:delete');
});