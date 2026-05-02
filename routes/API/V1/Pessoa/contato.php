<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/contato',
], function () {
  Route::get('', 'Contato@page')->middleware('ability:contato:show');
  Route::get('get', 'Contato@get')->middleware('ability:contato:show');
  Route::post('create', 'Contato@create')->middleware('ability:contato:create');
  Route::post('update', 'Contato@update')->middleware('ability:contato:update');
  Route::post('cancel', 'Contato@cacel')->middleware('ability:contato:cancel');
  Route::delete('delete', 'Contato@delete')->middleware('ability:contato:delete');
});