<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

require_once 'vendor/autoload.php';


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        return [
            'product_name' => $faker->productName,
            'price' => $faker->randomFloat(),
            'stock' => $faker->randomDigitNotNull(),
            'editedby' => null,
            'manufactuer_id' => $faker->randomDigitNotNull(),
            'user_id' => $faker->randomDigitNotNull(),

        ];
    }
}
