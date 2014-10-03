<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('hotels')->truncate();
		Hotel::create(['name' => 'ほげホテル']);
		Hotel::create(['name' => 'はげホテル']);
	}

}
