<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChatResource;
use App\Services\ChatService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ChatController extends Controller
{
    public function index(ChatService $service): AnonymousResourceCollection
    {
        return ChatResource::collection($service->getPaginatedChats());
    }
}
