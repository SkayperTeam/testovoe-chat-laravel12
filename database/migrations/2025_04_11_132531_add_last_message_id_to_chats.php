<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('chats', function (Blueprint $table) {
            $table
                ->foreignId('last_message_id')
                ->index()
                ->nullable()
                ->constrained('messages')
                ->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->dropForeign(['last_message_id']);
            $table->dropIndex(['last_message_id']);
            $table->dropColumn('last_message_id');
        });
    }
};
