<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/fornecedor',
], function () {
  Route::get('', 'Fornecedor@page')->middleware('ability:fornecedor:show');
  Route::get('get', 'Fornecedor@get')->middleware('ability:fornecedor:show');
  Route::post('create', 'Fornecedor@create')->middleware('ability:fornecedor:create');
  Route::post('update', 'Fornecedor@update')->middleware('ability:fornecedor:update');
  Route::post('cancel', 'Fornecedor@cacel')->middleware('ability:fornecedor:cancel');
  Route::delete('delete', 'Fornecedor@delete')->middleware('ability:fornecedor:delete');
});