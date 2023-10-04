<?php

namespace Database\Seeders;

use DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
		//User::truncate();
		//Post::truncate();
		//Category::truncate();
		
		$user = User::factory()->create([
			'name' => 'John Doe'
		]);
		Post::factory(5)->create([
			'user_id' => $user->id
		]);
    }
}
//pick up from Episode 29