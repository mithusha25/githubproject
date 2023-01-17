<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::table('students')->insert([
            
            'name' =>Str::random(10),
            'address' =>Str::random(10),
            
			
           
        ]);
    }
}
