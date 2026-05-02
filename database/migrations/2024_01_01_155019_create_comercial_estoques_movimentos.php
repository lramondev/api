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
    Schema::create('comercial.estoques_movimentos', function (Blueprint $table) {
      $table->id();

      $table->foreignId('empresa_id')->constrained('pessoa.pessoas');
      $table->foreignId('estoque_id')->constrained('comercial.estoques');
      $table->foreignId('produto_id')->constrained('comercial.produtos');
   
      $table->decimal('quantidade', 13, 4);
      $table->decimal('saldo', 13, 4);
      $table->decimal('custo_compra', 13, 4);
      $table->decimal('custo_medio', 13, 4);
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
    Schema::dropIfExists('comercial.estoques_movimentos');
  }
};
