<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/cliente',
], function () {
  Route::get('', 'Cliente@page')->middleware('ability:cliente:show');
  Route::get('get', 'Cliente@get')->middleware('ability:cliente:show');
  Route::post('create', 'Cliente@create')->middleware('ability:cliente:create');
  Route::post('update', 'Cliente@update')->middleware('ability:cliente:update');
  Route::post('cancel', 'Cliente@cacel')->middleware('ability:cliente:cancel');
  Route::delete('delete', 'Cliente@delete')->middleware('ability:cliente:delete');
});