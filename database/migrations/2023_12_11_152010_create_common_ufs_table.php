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
    Schema::create('common.ufs', function (Blueprint $table) {
      $table->unsignedBigInteger('id')->primary();
      $table->string('nome')->unique();
      $table->string('sigla')->unique();
      $table->string('brasao')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('common.ufs');
  }
};
