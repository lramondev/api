<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/ie',
], function () {
  Route::get('', 'IE@page')->middleware('ability:ie:show');
  Route::get('get', 'IE@get')->middleware('ability:ie:show');
  Route::post('create', 'IE@create')->middleware('ability:ie:create');
  Route::post('update', 'IE@update')->middleware('ability:ie:update');
  Route::post('cancel', 'IE@cacel')->middleware('ability:ie:cancel');
  Route::delete('delete', 'IE@delete')->middleware('ability:ie:delete');
});