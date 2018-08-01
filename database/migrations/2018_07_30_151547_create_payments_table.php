<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('payments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('contract')->unique();
			$table->string('client_acct_num')->nullable();
			$table->string('purchase_date')->nullable();
			$table->string('total_sale')->nullable();
			$table->string('date_of_last_payment')->nullable();
			$table->string('present_bal')->nullable();
			$table->string('paid_off_balance')->nullable();
			$table->string('term')->nullable();
			$table->string('installment')->nullable();
			$table->string('total_last_payment')->nullable();
			$table->string('amt_past_due')->nullable();
			$table->string('late_fee')->nullable();
			$table->string('minimun_payment')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('payments');
	}
}
