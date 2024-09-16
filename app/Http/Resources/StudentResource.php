<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
        'id'=>$this->id,
            'username'=>$this->username,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'created_at'=>$this->created_at->format('Y-m-d'),
            ];
    }
}
