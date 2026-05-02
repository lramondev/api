<?php

namespace App\Models\Pessoa;

use App\Models\AbastractModel;

class Pessoa extends AbastractModel
{
  protected $table = 'pessoa.pessoas';

  protected $fillable = [
    'id',
    'nome_razao_social',
    'apelido_fantasia',
    'cpf_cnpj',
    'logotipo'
  ];

  protected $hidden = [

  ];

  protected $casts = [
    'id' => 'integer'
  ];

  public function ies() {
    return $this->hasMany(IE::class, 'pessoa_id', 'id')
      ->with('uf');
  }

  public function enderecos() {
    return $this->hasMany(Endereco::class, 'pessoa_id', 'id')
      ->with('municipio');
  }

  public function contatos() {
    return $this->hasMany(Contato::class, 'pessoa_id', 'id');
  }

  public function certificados() {
    return $this->hasMany(Certificado::class, 'pessoa_id', 'id');
  }
}
