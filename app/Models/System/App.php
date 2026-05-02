<?php

namespace App\Models\System;

use App\Models\AbastractModel;

class App extends AbastractModel
{
  protected $table = 'system.app';

  const CREATED_AT = null;
  const UPDATED_AT = null;

  protected $fillable = [
    'id'
  ];

  protected $hidden = [

  ];

  protected $casts = [
    'id' => 'integer'
  ];
}
