<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('gc7_friends', function (Blueprint $table) {
			$table->id();
			$table->string('username');
			$table->string('name')->nullable();
			$table->string('lastname')->nullable();
			$table->string('email')->unique();
			$table->string('picture')->nullable();
			$table->string('password')->default(Hash::make('passworld'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('gc7_friends');
	}
};
