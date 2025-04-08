<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //cara panggil semua seeder:
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);

        Post::factory(50)->recycle([
            User::all(),
            Category::all(),
        ])->create();
    }
}
