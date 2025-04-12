<?php

namespace App\Models;

use Database\Factories\MessageFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $chat_id
 * @property string $body
 * @property string $created_at
 * @property-read \App\Models\Chat $chat
 * @method static MessageFactory factory($count = null, $state = [])
 * @method static Builder<static>|Message newModelQuery()
 * @method static Builder<static>|Message newQuery()
 * @method static Builder<static>|Message query()
 * @method static Builder<static>|Message whereBody($value)
 * @method static Builder<static>|Message whereChatId($value)
 * @method static Builder<static>|Message whereCreatedAt($value)
 * @method static Builder<static>|Message whereId($value)
 * @mixin Eloquent
 */
class Message extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }
}
