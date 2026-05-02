<?php

namespace App\Http\Controllers\API\Pessoa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pessoa\Empresa as Request;

class Empresa extends Controller
{
  
  private $request;

  public function __construct(
    Request $request) {
    $this->request = $request;
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