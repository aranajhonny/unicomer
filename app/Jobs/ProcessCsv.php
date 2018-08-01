<?php

namespace App\Jobs;

use Excel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ProcessCsv implements ShouldQueue {
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	protected $file;

	public function __construct($file) {
		$this->file = $file;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle() {
		$data = \Excel::load("storage/app/" . $this->file)->get();
		foreach ($data as $key => $value) {
			$clients[] = [
				'state' => $value->state,
				'acct_num' => $value->acct_num,
				'last_name' => $value->last_name,
				'name' => $value->name,
				'home_address' => $value->home_address,
				'home_phone' => $value->home_phone,
				'cell_phone' => $value->cell_phone,
				'ref_1_name' => $value->ref_1_name,
				'ref_1_phone' => $value->ref_1_phone,
				'ref_2_name' => $value->ref_2_name,
				'ref_2_phone' => $value->ref_2_phone,
				'ref_3_name' => $value->ref_3_name,
				'ref_3_phone' => $value->ref_3_phone,
				'antiguedad' => $value->antiguedad,
			];
		}
		foreach (array_chunk($clients, 1000) as $t) {

			DB::table('clients')->insert($t);

		}

	}
}
