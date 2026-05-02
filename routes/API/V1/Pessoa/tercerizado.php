<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\Pessoa',
  'middleware' => 'auth:sanctum',
  'prefix' => 'pessoa/tercerizado',
], function () {
  Route::get('', 'Tercerizado@page')->middleware('ability:tercerizado:show');
  Route::get('get', 'Tercerizado@get')->middleware('ability:tercerizado:show');
  Route::post('create', 'Tercerizado@create')->middleware('ability:tercerizado:create');
  Route::post('update', 'Tercerizado@update')->middleware('ability:tercerizado:update');
  Route::post('cancel', 'Tercerizado@cacel')->middleware('ability:tercerizado:cancel');
  Route::delete('delete', 'Tercerizado@delete')->middleware('ability:tercerizado:delete');
});