<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('pessoa.enderecos', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pessoa_id')->constrained('pessoa.pessoas');
      $table->foreignId('uf_id')->constrained('common.ufs');
			$table->foreignId('municipio_id')->constrained('common.municipios');
			$table->string('cep');
			$table->string('logradouro');
			$table->string('bairro');
			$table->string('numero');
			$table->string('complemento')->nullable();
      $table->string('referencia')->nullable();

      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pessoa.enderecos');
  }
};
