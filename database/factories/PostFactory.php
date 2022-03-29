<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'category_id' => \rand(1, 2),
            'image' => 'czFEqK4m5GgUStHR6W8rFnW71teAyW-metaYmFja2dyb3VuZC1leGFtcGxlLmpwZw==-.jpg',
            'body' => $this->faker->randomHtml
        ];
    }
}
