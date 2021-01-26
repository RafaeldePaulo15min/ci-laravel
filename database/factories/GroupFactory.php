<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\False_;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => rand(100,9999),
            'name' => $this->faker->company . ' ' . $this->faker->companySuffix,
            'cnpj' => $this->faker->cnpj(False),
            'active' => $this->faker->boolean(rand(0,1000)),
        ];
    }
}
