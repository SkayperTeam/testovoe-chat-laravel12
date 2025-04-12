<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::prefix('chats')
    ->name('chats.')
    ->group(function () {
        Route::get('/', [ChatController::class, 'index'])->name('index');

        Route::prefix('{chat}/messages')
            ->name('messages.')
            ->group(function () {
                Route::get('/', [MessageController::class, 'index'])->name('index');
            });
    });
