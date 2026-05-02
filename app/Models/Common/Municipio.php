<?php

namespace App\Models\Common;

use App\Models\AbastractModel;

class Municipio extends AbastractModel
{

  protected $table = 'common.municipios';

  protected $fillable = [
    'id',
    'nome',
    'brasao'
  ];

  protected $hidden = [
    'uf_id'
  ];

  protected $casts = [
    'id' => 'integer'
  ];
  
  public function uf() {
    return $this->hasOne(UF::class, 'id', 'uf_id');
  }
}
