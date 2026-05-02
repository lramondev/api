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
		Schema::create('system.users_roles', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('system.users');
			$table->foreignId('role_id')->constrained('system.roles');
			$table->timestamp('start_datetime');
			$table->timestamp('end_datetime')->nullable();
			
			$table->timestamps();
			$table->integer('status_id')->default(1)->constrained('system.status');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('system.users_roles');
	}
};
