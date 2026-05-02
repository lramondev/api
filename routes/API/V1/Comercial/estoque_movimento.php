<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/estoque_movimento',
], function () {
  Route::get('', 'EstoqueMovimento@page')->middleware('ability:estoque_movimento:show');
  Route::get('get', 'EstoqueMovimento@get')->middleware('ability:estoque_movimento:show');
  Route::post('create', 'EstoqueMovimento@create')->middleware('ability:estoque_movimento:create');
  Route::post('update', 'EstoqueMovimento@update')->middleware('ability:estoque_movimento:update');
  Route::post('cancel', 'EstoqueMovimento@cacel')->middleware('ability:estoque_movimento:cancel');
  Route::delete('delete', 'EstoqueMovimento@delete')->middleware('ability:estoque_movimento:delete');
});