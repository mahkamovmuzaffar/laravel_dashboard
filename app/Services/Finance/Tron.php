<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TronService
{
    protected $apiUrl;
    protected $apiKey;
    protected $wallet;
    protected $privateKey;

    public function __construct()
    {
        $this->apiUrl = config('tron.api_url');
        $this->apiKey = config('tron.api_key');
        $this->wallet = config('tron.wallet');
        $this->privateKey = config('tron.private_key');
    }

    public function getBalance()
    {
        $response = Http::withHeaders([
            'TRON-PRO-API-KEY' => $this->apiKey,
        ])->get("{$this->apiUrl}/v1/accounts/{$this->wallet}");

        return $response->json();
    }

    public function sendTransaction($to, $amount)
    {
        // Example: prepare Tron transaction logic here
        return "Sending {$amount} TRX to {$to}";
    }
}
