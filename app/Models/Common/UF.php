<?php

namespace App\Models\Common;

use App\Models\AbastractModel;

class UF extends AbastractModel
{
  
  protected $table = 'common.ufs';

  protected $fillable = [
    'id',
    'nome',
    'brasao'
  ];

  protected $hidden = [

  ];

  protected $casts = [
    'id' => 'integer'
  ];
}
