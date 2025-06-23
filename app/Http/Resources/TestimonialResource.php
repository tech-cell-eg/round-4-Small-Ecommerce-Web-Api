<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer name' => $this->customer_name,
            'customer image' => $this->customer_image,
            'content' => $this->content,
        ];
    }
}
