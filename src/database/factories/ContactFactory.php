<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'category_id'=>$this->faker->numberBetween(),
            'first_name'=> $this->faker->lastName,
            'last_name'=> $this->faker->firstName,
            'gender'=> $this->faker->numberBetween(1, 2, 3),
            'email'=> $this->faker->email,
            'tel'=> $this->faker->phoneNumber,
            'address'=> $this->faker->address,
            'building' => $this->faker->streetAddress,
            'detail' => $this->faker->text(100)
        ];
    }
}
