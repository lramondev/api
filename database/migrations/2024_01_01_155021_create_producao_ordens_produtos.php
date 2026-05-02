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
    Schema::create('manutencao.ordens_produtos', function (Blueprint $table) {
      $table->id();

      $table->foreignId('ordem_id')->constrained('manutencao.ordens');
      $table->foreignId('produto_id')->constrained('comercial.produtos');
   

      $table->dateTimeTz('datahora_movimento', 0);
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
    Schema::dropIfExists('manutencao.ordens_produtos');
  }
};
