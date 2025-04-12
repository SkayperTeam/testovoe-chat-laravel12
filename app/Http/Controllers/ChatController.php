<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChatResource;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index(ChatService $service): AnonymousResourceCollection
    {
        return ChatResource::collection($service->getPaginatedChats());
    }
}
