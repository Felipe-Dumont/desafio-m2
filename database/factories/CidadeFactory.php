<?php

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CidadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->streetAddress(),
            'estado' => 'PR',
            'grupo' => rand(1, 20)
        ];
    }
}
