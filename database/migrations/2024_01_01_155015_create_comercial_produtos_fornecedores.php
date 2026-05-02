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
    Schema::create('comercial.produtos_fornecedores', function (Blueprint $table) {
      $table->id();

      $table->foreignId('produto_id')->constrained('comercial.produtos');
      $table->foreignId('fornecedor_id')->constrained('pessoa.pessoas');
      
      $table->string('codigo');
      $table->string('descricao');
      $table->decimal('fator_conversao', 13, 8);
  
      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comercial.produtos_fornecedores');
  }
};
