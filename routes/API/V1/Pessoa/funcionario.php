<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/funcionario',
], function () {
  Route::get('', 'Funcionario@page')->middleware('ability:funcionario:show');
  Route::get('get', 'Funcionario@get')->middleware('ability:funcionario:show');
  Route::post('create', 'Funcionario@create')->middleware('ability:funcionario:create');
  Route::post('update', 'Funcionario@update')->middleware('ability:funcionario:update');
  Route::post('cancel', 'Funcionario@cacel')->middleware('ability:funcionario:cancel');
  Route::delete('delete', 'Funcionario@delete')->middleware('ability:funcionario:delete');
});