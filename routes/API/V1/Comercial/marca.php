<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Comercial',
  'middleware' => 'auth:sanctum',
  'prefix' => 'comercial/marca',
], function () {
  Route::get('', 'Marca@page')->middleware('ability:marca:show');
  Route::get('get', 'Marca@get')->middleware('ability:marca:show');
  Route::post('create', 'Marca@create')->middleware('ability:marca:create');
  Route::post('update', 'Marca@update')->middleware('ability:marca:update');
  Route::post('cancel', 'Marca@cacel')->middleware('ability:marca:cancel');
  Route::delete('delete', 'Marca@delete')->middleware('ability:marca:delete');
});