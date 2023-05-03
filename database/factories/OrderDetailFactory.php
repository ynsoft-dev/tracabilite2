<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loaddetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrderDetail::class;
    public function definition(): array
    {
        return [
            'quantiteplt' => fake()->randomNumber(),
            'order_id' => Order::factory(),
            'product_id' => product::factory(),
        ];
    }
}
