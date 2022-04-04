<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number'       => $this->faker->buildingNumber(),
            'name'         => $this->faker->name,
            'email'        => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,
            'address'      => $this->faker->address,
            'city'         => $this->faker->city,
            'province'     => $this->faker->state,
            'zip_code'     => $this->faker->postcode,
            'pay_amount'   => $this->faker->randomNumber(6),
            'status'       => $this->faker->randomElement(Transaction::status)
        ];
    }
}
