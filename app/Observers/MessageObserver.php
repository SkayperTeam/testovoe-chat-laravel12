<?php

namespace App\Observers;

use App\Models\Message;

class MessageObserver
{
    /**
     * Handle the Message "created" event.
     */
    public function created(Message $message): void
    {
        $message->chat->update([
            'last_message_id' => $message->id
        ]);
    }


    /**
     * Handle the Message "updated" event.
     */
    public function updated(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "deleted" event.
     */
    public function deleted(Message $message)
    {
        $chat = $message->chat;

        // если это удаляемое сообщение было последним в чате
        if ($chat->last_message_id === $message->id) {
            // ищем новое "последнее" сообщение
            $newLast = $chat->messages()
                ->where('id', '!=', $message->id)
                ->latest('created_at')
                ->first();

            $chat->update([
                'last_message_id' => optional($newLast)->id
            ]);
        }
    }

    /**
     * Handle the Message "restored" event.
     */
    public function restored(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "force deleted" event.
     */
    public function forceDeleted(Message $message): void
    {
        //
    }
}
