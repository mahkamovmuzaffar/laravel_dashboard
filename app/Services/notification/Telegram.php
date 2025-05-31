<?php

namespace App\Services\notification;

use Illuminate\Support\Facades\Http;

class Telegram
{
    protected string $botToken;
    protected string $chatId;

    public function __construct()
    {
        $this->botToken = config('services.telegram.bot_token');
        $this->chatId = config('services.telegram.chat_id');
    }

    /**
     * Send a single notification
     */
    public function send_notify(string $message): bool
    {
        $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $this->chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);

        return $response->ok();
    }

    /**
     * Send multiple messages one by one
     */
    public function send_bulk_notify(array $messages): void
    {
        foreach ($messages as $message) {
            $this->send_notify($message);
            usleep(300_000); // optional delay between messages (300ms)
        }
    }
}
