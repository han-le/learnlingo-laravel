<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'post_title' => $this->faker->text(100),
            'slug' => $this->faker->slug(),
            "excerpt" => $this->faker->text(),
            'post_content'=> $this->faker->paragraph(),
            'views'=> $this->faker->randomNumber(),
            'must_read'=> $this->faker->boolean(),
            'featured_1'=> $this->faker->boolean(),
            'featured_2'=> $this->faker->boolean(),
            'feature_3'=> $this->faker->boolean(),
        ];
    }
}
