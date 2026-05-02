<?php

namespace App\Http\Controllers\API\Manutencao;

use App\Http\Controllers\Controller;

class OrdemTipo extends Controller
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