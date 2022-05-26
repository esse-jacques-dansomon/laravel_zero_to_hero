<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            "name"=>$this->faker->name,
            "noSerial"=>$this->faker->swiftBicNumber,
            "imageUrl"=>$this->faker->imageUrl,
            "type_article_id"=>rand(1,5),
            "isAvailable"=>rand(0,1),
        ];
    }
}
