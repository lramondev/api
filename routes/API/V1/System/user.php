<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\System',
  'middleware' => 'auth:sanctum',
  'prefix' => 'system/user',
], function () {
  Route::get('', 'User@page')->middleware('ability:user:show');
  Route::get('get', 'User@get')->middleware('ability:user:show');
  Route::post('create', 'User@create')->middleware('ability:user:create');
  Route::post('update', 'User@update')->middleware('ability:user:update');
  Route::post('cancel', 'User@cacel')->middleware('ability:user:cancel');
  Route::delete('delete', 'User@delete')->middleware('ability:user:delete');
});