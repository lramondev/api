<?php

namespace App\Http\Controllers\API\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\App as Request;

use App\Models\System\App as AppModel;

class App extends Controller
{
  public function load() {
    return [];
  }
}