<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('clients', function (Blueprint $table) {
			$table->increments('id');
			$table->string('acct_num')->nullable();
			$table->string('name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('state')->nullable();
			$table->string('home_address')->nullable();
			$table->string('home_phone')->nullable();
			$table->string('cell_phone')->nullable();
			$table->string('ref_1_name')->nullable();
			$table->string('ref_1_phone')->nullable();
			$table->string('ref_2_name')->nullable();
			$table->string('ref_2_phone')->nullable();
			$table->string('ref_3_name')->nullable();
			$table->string('ref_3_phone')->nullable();
			$table->string('antiguedad')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('clients');
	}
}
