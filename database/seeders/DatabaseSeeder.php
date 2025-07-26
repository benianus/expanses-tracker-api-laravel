<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Expanse;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ExpanseCategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mohamed BENIANE',
            'email' => 'beniane39@gmail.com',
        ]);

        Expanse::factory(10)->create();
        Category::factory(10)->create();

        $expanses = Expanse::all();
        $categories = Category::all();

        $expanses->each(function ($expanse) use ($categories) {
            $expanse->categories()->attach(
                random_int(1, 10)
            );
        });
    }
}
