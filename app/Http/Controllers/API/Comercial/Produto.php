<?php

namespace App\Http\Controllers\API\Comercial;

use App\Http\Controllers\Controller;

class Produto extends Controller
{
  public function __construct() {
  
  }

  public function paginate() {
    return 'paginate';
  }

  public function get() {
    return 'get';
  }
  
  public function save() {
    return 'save';
  }
}