<?php

namespace App\Services;

use App\Models\Chat;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ChatService
{
    public function getPaginatedChats($perPage = 20): LengthAwarePaginator
    {
        return Chat::with('lastMessage')
            ->orderByDesc('last_message_id')
            ->paginate($perPage);
    }
}
