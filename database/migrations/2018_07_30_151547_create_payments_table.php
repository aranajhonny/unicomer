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
			$table->string('client_acct_num');
			$table->foreign('client_acct_num')->references("acct_num")->on("clients");
			$table->string('purchase_date');
			$table->string('total_sale');
			$table->string('date_of_last_payment');
			$table->string('present_bal');
			$table->string('paid_off_balance');
			$table->string('term');
			$table->string('installment');
			$table->string('total_last_payment');
			$table->string('amt_past_due');
			$table->string('late_fee');
			$table->string('minimun_payment');
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
