<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'name' => 'admin',
			'username' => 'admin',
			'role' => 1,
			'status' => 1,
			'password' => bcrypt('Unicomer2018'),
		]);
	}
}
