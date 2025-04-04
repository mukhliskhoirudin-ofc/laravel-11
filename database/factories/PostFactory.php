<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(); // Simpan title terlebih dahulu agar slugnya sama

        return [
            'title' => $title,
            'author_id' => User::factory(), //bisa dihubungkan dengan factory user
            'slug' => Str::slug($title), // Gunakan title yang sudah disimpan
            'body' => fake()->text(),
        ];
    }
}
