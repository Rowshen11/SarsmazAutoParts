<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker-> words(3,true).' '. $this->faker->randomNumber(5);
        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'sku' => strtoupper(Str::random(10)),
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => $this -> faker -> paragraph() ,
            'price' => $this -> faker -> randomFloat(2, 100, 5000),
            'stock' => $this -> faker -> numberBetween(0, 50),
            'is_active' => true,
            'attributes' => [
            'weight' => $this -> faker -> randomElement(['1kg', '2kg', '0.5kg']),
            'material' => $this -> faker -> randomElement(['Steel', 'Aluminum', 'Plastic']),
            ]

            //
        ];
    }
}
