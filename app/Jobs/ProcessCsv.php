<?php

namespace App\Jobs;

use Excel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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
			$arr[] = ['state' => $value->state];
		}

		dd($arr);

	}
}
