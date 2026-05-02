<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/candidato',
], function () {
  Route::get('', 'Candidato@page')->middleware('ability:candidato:show');
  Route::get('get', 'Candidato@get')->middleware('ability:candidato:show');
  Route::post('create', 'Candidato@create')->middleware('ability:candidato:create');
  Route::post('update', 'Candidato@update')->middleware('ability:candidato:update');
  Route::post('cancel', 'Candidato@cacel')->middleware('ability:candidato:cancel');
  Route::delete('delete', 'Candidato@delete')->middleware('ability:candidato:delete');
});