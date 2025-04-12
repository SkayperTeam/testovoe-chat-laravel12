<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageController extends Controller
{
    public function index(Chat $chat): LengthAwarePaginator
    {
        return $chat->messages()
            ->orderByDesc('created_at')
            ->paginate(50);
    }
}
