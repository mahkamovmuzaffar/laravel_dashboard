<?php

namespace App\Services\notification;

use Illuminate\Support\Facades\Http;

class Whatsapp
{
    protected $apiUrl;
    protected $token;

    public function __construct()
    {
        $this->apiUrl = config('services.whatsapp.api_url'); // e.g., Meta Graph API or Twilio API URL
        $this->token = config('services.whatsapp.token'); // Bearer or basic token
    }

    /**
     * Send a WhatsApp message to a single phone number.
     *
     * @param string $phoneNumber E.g. in international format +998...
     * @param string $message
     * @return array
     */
    public function sendMessage(string $phoneNumber, string $message): array
    {
        $payload = [
            'messaging_product' => 'whatsapp',
            'to' => $phoneNumber,
            'type' => 'text',
            'text' => [
                'body' => $message,
            ],
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type'  => 'application/json',
        ])->post($this->apiUrl, $payload);

        return $response->json();
    }

    /**
     * Send bulk WhatsApp messages.
     *
     * @param array $numbers
     * @param string $message
     * @return array
     */
    public function sendBulkMessage(array $numbers, string $message): array
    {
        $results = [];
        foreach ($numbers as $number) {
            $results[$number] = $this->sendMessage($number, $message);
        }
        return $results;
    }
}
