<?php

namespace App\Http\Controllers\API\Pessoa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pessoa\Certificado as Request;

class Certificado extends Controller
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