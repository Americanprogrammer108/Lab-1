<?php

namespace Database\Factories;


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