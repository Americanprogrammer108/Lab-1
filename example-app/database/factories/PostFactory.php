<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
class PostFactory extends Factory
{
	protected $model = Post::class;
	
	public function definition()
	{
		return [
			'user_id' => User::factory(),
			'category_id' => Category::factory(),
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'excerpt' => $this->faker->sentence,
			'body' => $this->faker->paragraph
		];
	}
}