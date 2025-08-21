<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CbuService
{
    protected string $endpoint = "https://cbu.uz/en/arkhiv-kursov-valyut/json/";

    /**
     * Get exchange rates from CBU
     *
     * @param string|array|null $currencyCodes
     * @return array
     */
    public function get_cbu_rate(string|array|null $currencyCodes = null): array
    {
        $response = Http::get($this->endpoint);

        if ($response->failed()) {
            return ['error' => 'Failed to fetch data from CBU'];
        }

        $rates = $response->json(); // array of all currencies

        if ($currencyCodes === null) {
            return $rates; // all
        }

        // normalize to array
        $currencyCodes = is_array($currencyCodes) ? $currencyCodes : [$currencyCodes];
        $currencyCodes = array_map('strtoupper', $currencyCodes);

        return collect($rates)
            ->whereIn('Ccy', $currencyCodes) // filter by code (Ccy field = currency code)
            ->values()
            ->all();
    }
}
