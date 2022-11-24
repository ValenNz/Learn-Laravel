<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>2
     */
    public function definition()
    {
        return [ 
            /* Melakukan apa yang ada pada seeder */
            'title' => $this->faker->sentence(mt_rand(2,8)), // mt_rand() Untuk membangkitkan bil random
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => '<P>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))) . '</p>', // membuat sebuah paragrqap(paragraphs()) | join : implode() 
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p)=> "<p>$p</p>")->implode(''), // setiap elemen array ada paragraph
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}
 