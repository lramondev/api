<?php

namespace App\Models\System;

use App\Models\AbastractModel;

class Status extends AbastractModel
{
  protected $table = 'system.status';

  protected $fillable = [
    'id',
    'name',
    'description'
  ];

  protected $hidden = [

  ];

  protected $casts = [
    'id' => 'integer'
  ];
}
