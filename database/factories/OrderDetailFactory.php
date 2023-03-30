<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\PaymentDetail;
use App\Models\UserPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::all()->random()->id;
            },
            'total' => $this->faker->numberBetween(200,5000),
            'payment_id' => function () {
                return PaymentDetail::all()->random()->id;
            },

        ];
    }
}
