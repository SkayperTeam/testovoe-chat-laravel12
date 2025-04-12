<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Chat $chat)
    {
        $messages = $chat->messages()
            ->orderByDesc('created_at')
            ->paginate(50); // или другой лимит

        return response()->json($messages);
    }
}
