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
    Schema::create('pessoa.certificados', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pessoa_id')->constrained('pessoa.pessoas');
			$table->date('emissao');
			$table->date('vencimento');
			$table->string('certificado');
			$table->string('senha');

      $table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pessoa.certificados');
  }
};
