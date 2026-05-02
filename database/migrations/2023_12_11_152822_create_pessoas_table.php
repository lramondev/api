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
    Schema::create('pessoa.pessoas', function (Blueprint $table) {
      $table->id();
      $table->string('nome_razao_social');
      $table->string('apelido_fantasia')->nullable();
      $table->string('cpf_cnpj')->unique();
      $table->string('img')->nullable();

      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pessoa.pessoas');
  }
};
