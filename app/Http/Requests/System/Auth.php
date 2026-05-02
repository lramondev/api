<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class Auth extends FormRequest
{
  public function authorize() {
    return true;
  }

  public function rules() {
    return [];
  }

  public function filters() {
    return [];
  }

  public function messages() {
    return [];
  }
}