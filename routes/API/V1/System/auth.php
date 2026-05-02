<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\System',
  //'middleware' => '',
  'prefix' => 'auth',
], function () {
  Route::get('me', 'Auth@me')->middleware('auth:sanctum');
  Route::post('login', 'Auth@login');
  Route::post('logout', 'Auth@logout')->middleware('auth:sanctum');
});