<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ChatResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'last_message' => Str::limit(optional($this->lastMessage)->body, 100),
            'last_message_time' => optional($this->lastMessage)->created_at,
        ];
    }

}

