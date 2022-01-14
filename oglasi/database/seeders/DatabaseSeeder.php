<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $user = User::factory()->create([
        //     'name' => 'John Doe'
        // ]);
        Category::factory(5)->create([]);
    }
}
