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
			$table->string('acct_num')->unique();
			$table->string('name');
			$table->string('last_name');
			$table->string('state');
			$table->string('home_address');
			$table->string('home_phone');
			$table->string('cell_phone');
			$table->string('ref_1_name');
			$table->string('ref_1_phone');
			$table->string('ref_2_name');
			$table->string('ref_2_phone');
			$table->string('ref_3_name');
			$table->string('ref_3_phone');
			$table->string('antiguedad');
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
