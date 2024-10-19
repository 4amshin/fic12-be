<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'transaction_time' => $this->id,
            'total_price' => $this->total_price,
            'total_item' => $this->total_item,
            'kasir_id' => $this->kasir_id,
            'payment_method' => $this->payment_method,
        ];
    }
}
