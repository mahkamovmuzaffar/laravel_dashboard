<?php

namespace App\Services\Finance;

use Illuminate\Support\Facades\Http;

class Tron
{
    private $apiUrl     = 'https://api.trongrid.io';
    private $apiKey     = 'your_tron_api_key_here';
    private $wallet     = 'your_wallet_address';
    private $privateKey = 'your_private_key_here';

    /**
     * Get wallet balance in TRX
     */
    public function getBalance()
    {
        $response = Http::withHeaders([
            'TRON-PRO-API-KEY' => $this->apiKey,
        ])->get("{$this->apiUrl}/v1/accounts/{$this->wallet}");

        return $response->json();
    }

    /**
     * Get transaction history for the wallet
     */
    public function getTransactions($limit = 20)
    {
        $response = Http::withHeaders([
            'TRON-PRO-API-KEY' => $this->apiKey,
        ])->get("{$this->apiUrl}/v1/accounts/{$this->wallet}/transactions", [
            'limit' => $limit,
            'order_by' => 'block_timestamp,desc'
        ]);

        return $response->json();
    }

    /**
     * Get transaction details by transaction ID (txid)
     */
    public function getTransactionInfo($txid)
    {
        $response = Http::withHeaders([
            'TRON-PRO-API-KEY' => $this->apiKey,
        ])->get("{$this->apiUrl}/v1/transactions/{$txid}");

        return $response->json();
    }

    /**
     * Send TRX to another wallet (raw transaction - needs signing)
     * For production, use TronWeb or gRPC for signing securely.
     */
    public function sendTransaction($to, $amount)
    {
        return [
            'status' => 'pending',
            'message' => "Sending {$amount} TRX to {$to} from {$this->wallet}."
        ];
    }
}
