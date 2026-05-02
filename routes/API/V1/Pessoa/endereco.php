<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/endereco',
], function () {
  Route::get('', 'Endereco@page')->middleware('ability:endereco:show');
  Route::get('get', 'Endereco@get')->middleware('ability:endereco:show');
  Route::post('create', 'Endereco@create')->middleware('ability:endereco:create');
  Route::post('update', 'Endereco@update')->middleware('ability:endereco:update');
  Route::post('cancel', 'Endereco@cacel')->middleware('ability:endereco:cancel');
  Route::delete('delete', 'Endereco@delete')->middleware('ability:endereco:delete');
});