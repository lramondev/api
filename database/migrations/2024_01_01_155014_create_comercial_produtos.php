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
    Schema::create('comercial.produtos', function (Blueprint $table) {
      $table->id();
      $table->foreignId('produto_tipo_id')->constrained('comercial.produto_tipos');
      $table->string('descricao');
      $table->string('img')->nullable();
      $table->boolean('servico')->default(false);

      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comercial.produtos');
  }
};
