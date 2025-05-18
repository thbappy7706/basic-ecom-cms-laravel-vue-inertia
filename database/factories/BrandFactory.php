<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition(): array
    {
        $name = fake()->unique()->company();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'is_active' => fake()->boolean(90),
            'logo' => 'brands/' . fake()->numberBetween(1, 10) . '.jpg',
        ];
    }
}
