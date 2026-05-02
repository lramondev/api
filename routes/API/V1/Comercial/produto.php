<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/produto',
], function () {
  Route::get('', 'Produto@page')->middleware('ability:produto:show');
  Route::get('get', 'Produto@get')->middleware('ability:produto:show');
  Route::post('create', 'Produto@create')->middleware('ability:produto:create');
  Route::post('update', 'Produto@update')->middleware('ability:produto:update');
  Route::post('cancel', 'Produto@cacel')->middleware('ability:produto:cancel');
  Route::delete('delete', 'Produto@delete')->middleware('ability:produto:delete');
});