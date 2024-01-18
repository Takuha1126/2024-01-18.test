<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' =>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'gender'=>$this->faker->numberBetween(1,2),
            'email'=>$this->faker->safeEmail(),
            'first_tell' =>$this->faker->phoneNumber(),
            'middle_tell' =>$this->faker->phoneNumber(),
            'last_tell' =>$this->faker->phoneNumber(),
            'address' =>$this->faker->city(),
            'building' => $this->faker->secondaryAddress(),
            'detail' =>$this->faker->text(),
        ];
    }
}
