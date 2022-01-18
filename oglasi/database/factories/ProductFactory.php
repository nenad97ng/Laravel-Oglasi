<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'product_condition' => $this->faker->randomElement(['Novo', 'Polovno']),
            'price' => $this->faker->numerify('##'),
            'phonenumber' => $this->faker->unique()->numerify('065#######'),
            'address' => $this->faker->address(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'product_picture' => 'public/product_pictures/1RQPB8mcWDY15A3wBw83A2OyZyn9J14DXVQF27u9.png',

        ];
    }
}
