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
		Schema::create('system.roles_permissions', function (Blueprint $table) {
			$table->id();
			$table->foreignId('role_id')->constrained('system.roles');
			$table->foreignId('permission_id')->constrained('system.permissions');
			$table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('system.roles_permissions');
	}
};
