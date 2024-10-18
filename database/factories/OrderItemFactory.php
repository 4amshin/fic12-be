<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::factory()->create();
        $quantity = $this->faker->numberBetween(1, 5);
        $totalPrice = $quantity * $product->price;

        return [
            'order_id' => Order::factory(), // Creates a new Order
            'product_id' => $product->id,   // Assigns the product
            'quantity' => $quantity,
            'total_price' => $totalPrice,
        ];
    }
}
