<?php

namespace App\Http\Requests\Pessoa;

use Illuminate\Foundation\Http\FormRequest;

class Cliente extends FormRequest
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