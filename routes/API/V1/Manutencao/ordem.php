<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Manutencao',
  'middleware' => 'auth:sanctum',
  'prefix' => 'manutencao/ordem',
], function () {
  Route::get('', 'Ordem@page')->middleware('ability:ordem:show');
  Route::get('get', 'Ordem@get')->middleware('ability:ordem:show');
  Route::post('create', 'Ordem@create')->middleware('ability:ordem:create');
  Route::post('update', 'Ordem@update')->middleware('ability:ordem:update');
  Route::post('cancel', 'Ordem@cacel')->middleware('ability:ordem:cancel');
  Route::delete('delete', 'Ordem@delete')->middleware('ability:ordem:delete');
});