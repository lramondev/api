<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/empresa',
], function () {
  Route::get('', 'Empresa@page')->middleware('ability:empresa:show');
  Route::get('get', 'Empresa@get')->middleware('ability:empresa:show');
  Route::post('create', 'Empresa@create')->middleware('ability:empresa:create');
  Route::post('update', 'Empresa@update')->middleware('ability:empresa:update');
  Route::post('cancel', 'Empresa@cacel')->middleware('ability:empresa:cancel');
  Route::delete('delete', 'Empresa@delete')->middleware('ability:empresa:delete');
});