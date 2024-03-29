<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class RequestPriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'created_at'        => $this->created_at->format('Y-m-d'),
            'user'              => new EndUserResource($this->user),
            'showroom'          => new ShowroomResource($this->showroom),
            'car'               => new CarResource($this->car),

        ];    }
}
