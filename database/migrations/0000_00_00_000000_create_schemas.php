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
    \DB::statement("IF NOT EXISTS (SELECT * FROM sys.schemas WHERE name = 'system') 
      EXEC('CREATE SCHEMA [system] AUTHORIZATION [dbo]');");

    \DB::statement("IF NOT EXISTS (SELECT * FROM sys.schemas WHERE name = 'common') 
      EXEC('CREATE SCHEMA [common] AUTHORIZATION [dbo]');");

    \DB::statement("IF NOT EXISTS (SELECT * FROM sys.schemas WHERE name = 'pessoa') 
      EXEC('CREATE SCHEMA [pessoa] AUTHORIZATION [dbo]');");

    \DB::statement("IF NOT EXISTS (SELECT * FROM sys.schemas WHERE name = 'comercial') 
      EXEC('CREATE SCHEMA [comercial] AUTHORIZATION [dbo]');");

    \DB::statement("IF NOT EXISTS (SELECT * FROM sys.schemas WHERE name = 'manutencao') 
      EXEC('CREATE SCHEMA [manutencao] AUTHORIZATION [dbo]');");
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {}
};
