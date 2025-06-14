<?php

namespace App\Services\notification;

use Illuminate\Support\Facades\Http;

class Firebase
{
    protected $firebaseUrl;
    protected $serverKey;

    public function __construct()
    {
        $this->firebaseUrl = 'https://fcm.googleapis.com/fcm/send';
        $this->serverKey = config('services.firebase.server_key'); // Store in .env!
    }

    /**
     * Send notification to single user by FCM token.
     */
    public function sendNotify(string $token, string $title, string $body, array $data = [])
    {
        $payload = [
            'to' => $token,
            'notification' => [
                'title' => $title,
                'body' => $body,
            ],
            'data' => $data,
        ];

        return Http::withHeaders([
            'Authorization' => 'key=' . $this->serverKey,
            'Content-Type' => 'application/json',
        ])->post($this->firebaseUrl, $payload)->json();
    }

    /**
     * Send notification to multiple tokens.
     */
    public function sendBulkNotify(array $tokens, string $title, string $body, array $data = [])
    {
        $payload = [
            'registration_ids' => $tokens,
            'notification' => [
                'title' => $title,
                'body' => $body,
            ],
            'data' => $data,
        ];

        return Http::withHeaders([
            'Authorization' => 'key=' . $this->serverKey,
            'Content-Type' => 'application/json',
        ])->post($this->firebaseUrl, $payload)->json();
    }
}
