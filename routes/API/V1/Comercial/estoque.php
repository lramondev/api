<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/estoque',
], function () {
  Route::get('', 'Estoque@page')->middleware('ability:estoque:show');
  Route::get('get', 'Estoque@get')->middleware('ability:estoque:show');
  Route::post('create', 'Estoque@create')->middleware('ability:estoque:create');
  Route::post('update', 'Estoque@update')->middleware('ability:estoque:update');
  Route::post('cancel', 'Estoque@cacel')->middleware('ability:estoque:cancel');
  Route::delete('delete', 'Estoque@delete')->middleware('ability:estoque:delete');
});