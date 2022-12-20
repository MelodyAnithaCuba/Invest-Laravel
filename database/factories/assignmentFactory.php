<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class assignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'raceline'=>$this->faker->text(50),
            'date'=>$this->faker->date(),
            'type'=>$this->faker->text(50),
            'student'=>$this->faker->text(50),
            'document'=>$this->faker->text(50),
            'note'=>$this->faker->text(10)
        ];
    }
}
