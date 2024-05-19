<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;


class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name'          => $name,
            'description'   => $this->faker->paragraph(),
            'price'         => $this->faker->randomNumber(),
            'slug'          => Str::slug($name),
            'image'         => $this->faker->imageUrl(400, 400),
            'id_user'       => User::pluck('id')->random(),
            'id_category'   => Category::pluck('id')->random(),
        ];
    }
}
