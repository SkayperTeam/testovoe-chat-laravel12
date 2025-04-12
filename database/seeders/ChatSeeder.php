<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Chat::factory()
            ->count(100)
            ->create()
            ->each(function ($chat) {
                $messages = Message::factory()
                    ->count(rand(10, 100))
                    ->create([
                        'chat_id' => $chat->id,
                    ]);

                $chat->update(['last_message_id' => $messages->sortByDesc('created_at')->first()->id]);
            });

    }

}
