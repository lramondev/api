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
    Schema::create('manutencao.ordens', function (Blueprint $table) {
      $table->id();

      $table->foreignId('empresa_id')->constrained('pessoa.pessoas');
      $table->foreignId('fornecedor_id')->constrained('pessoa.pessoas');
  
      $table->string('observacao')->nullable();
      
      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('manutencao.ordens');
  }
};
