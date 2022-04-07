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
        $status = $this->faker->randomElement(Transaction::status);
        if ($status == 'PENDING') {
            $color = 'yellow';
        } elseif ($status == 'APPROVE') {
            $color = 'blue';
        } elseif ($status == 'SENDING') {
            $color = 'orange';
        } elseif ($status == 'SUCCESS') {
            $color = 'green';
        } elseif ($status == 'FAILED') {
            $color = 'red';
        }

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
            'status'       => $status,
            'status_color' => $color
        ];
    }
}
