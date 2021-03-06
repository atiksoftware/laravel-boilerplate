<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		// User::create([
		// 	'firstname' => 'Mansur',
		// 	'lastname' => 'Atik',
		// 	'email' => 'atiksoftware@gmail.com',
		// ]);

		// call OptionSeeder
		$this->call(OptionSeeder::class);
	}
}
