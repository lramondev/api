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
    Schema::create('comercial.estoques_produtos', function (Blueprint $table) {
      $table->id();
     
      $table->foreignId('estoque_id')->constrained('comercial.estoques');
      $table->foreignId('produto_id')->constrained('comercial.produtos');

      $table->decimal('minimo', 13, 4)->nullable();
      $table->decimal('maximo', 13, 4)->nullable();
      
      $table->string('rua')->nullable();
      $table->string('box')->nullable();
      $table->string('estante')->nullable();
      $table->string('prateleira')->nullable();

      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comercial.estoques_produtos');
  }
};
