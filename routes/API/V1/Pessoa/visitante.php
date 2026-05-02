<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/visitante',
], function () {
  Route::get('', 'Visitante@page')->middleware('ability:visitante:show');
  Route::get('get', 'Visitante@get')->middleware('ability:visitante:show');
  Route::post('create', 'Visitante@create')->middleware('ability:visitante:create');
  Route::post('update', 'Visitante@update')->middleware('ability:visitante:update');
  Route::post('cancel', 'Visitante@cacel')->middleware('ability:visitante:cancel');
  Route::delete('delete', 'Visitante@delete')->middleware('ability:visitante:delete');
});