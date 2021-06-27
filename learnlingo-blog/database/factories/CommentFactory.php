<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker,
            'post_id' => Post::factory(),
            'comment_author' => $this->faker->name(),
            'comment_author_email' => $this->faker->email,
            'comment_content' => $this->faker->sentence(),
            'comment_approved' => $this->faker->boolean(),
        ];
    }
}
