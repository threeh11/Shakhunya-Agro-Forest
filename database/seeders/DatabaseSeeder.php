<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ContactSeeder::class,
            ProductSeeder::class,
        ]);
        Question::factory()->count(500)->create();
        Review::factory()->count(500)->create();
    }
}
