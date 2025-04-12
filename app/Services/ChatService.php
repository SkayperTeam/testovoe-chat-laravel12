<?php

namespace App\Services;

use App\Models\Chat;
use Illuminate\Pagination\LengthAwarePaginator;

class ChatService
{
    public function getPaginatedChats($perPage = 20): LengthAwarePaginator
    {
        return Chat::with('lastMessage')
            ->orderByDesc('last_message_id')
            ->paginate($perPage);
    }
}
