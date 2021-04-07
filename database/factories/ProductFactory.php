<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Use faker library from faker-provider-collection of mbezhanov
        $faker_mbezhanov = \Faker\Factory::create();
        $faker_mbezhanov->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker_mbezhanov)); 

        return [
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name'       => $faker_mbezhanov->productName,
            'description'=> $this->faker->realText($maxNbChars = 30, $indexSize = 2),
            'price'      => $this->faker->numberBetween($min = 40000, $max = 900000),
            'score'      => $this->faker->numberBetween($min = 1, $max=5),
            'available'  => $this->faker->numberBetween($min = 0, $max=1),
        ];
    }
}
