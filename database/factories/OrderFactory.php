<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_time' => $this->faker->dateTimeThisYear(),
            'total_price' => 0, // Will be calculated later when order items are added
            'total_item' => 0,  // Will be calculated later when order items are added
            'kasir_id' => User::factory(), // Creates a new User (cashier)
            'payment_method' => $this->faker->randomElement(['cash', 'credit', 'debit']),
        ];
    }

    public function withItems($itemCount = 3)
    {
        return $this->afterCreating(function (Order $order) use ($itemCount) {
            $totalPrice = 0;
            $totalItem = 0;

            OrderItem::factory($itemCount)->create([
                'order_id' => $order->id,
            ])->each(function ($orderItem) use (&$totalPrice, &$totalItem) {
                $totalPrice += $orderItem->total_price;
                $totalItem += $orderItem->quantity;
            });

            $order->update([
                'total_price' => $totalPrice,
                'total_item' => $totalItem,
            ]);
        });
    }
}
