<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/certificado',
], function () {
  Route::get('', 'Certificado@page')->middleware('ability:certificado:show');
  Route::get('get', 'Certificado@get')->middleware('ability:certificado:show');
  Route::post('create', 'Certificado@create')->middleware('ability:certificado:create');
  Route::post('update', 'Certificado@update')->middleware('ability:certificado:update');
  Route::post('cancel', 'Certificado@cacel')->middleware('ability:certificado:cancel');
  Route::delete('delete', 'Certificado@delete')->middleware('ability:certificado:delete');
});