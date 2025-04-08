<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create(
            [
                'name' => 'Web programming',
                'slug'  => 'web-programming',
            ],
        );

        Category::create(
            [
                'name' => 'Web design',
                'slug'  => 'web-design',
            ],
        );

        Category::create(
            [
                'name' => 'Mechine learning',
                'slug'  => 'mechine-learning',
            ],
        );
    }
}
