<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
            'card_code' => $this->card_code,
            'racer_id' => $this->racer_id,
            'coupon' => $this->coupon,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}
