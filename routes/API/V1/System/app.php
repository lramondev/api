<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'App\Http\Controllers\API\System',
  //'middleware' => 'cors',
  'prefix' => 'system/app',
], function () {
  Route::get('load', 'App@load');
});