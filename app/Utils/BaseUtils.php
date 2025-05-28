<?php

namespace App\Helpers;

class FormatHelper
{
    /**
     * Mask card number: Show first 6 and last 4 digits only.
     * Example: 860012******1234
     */
    public static function card_mask(string $cardNumber): string
    {
        if (strlen($cardNumber) < 10) {
            return $cardNumber; // return as-is if not standard format
        }

        return substr($cardNumber, 0, 6) . str_repeat('*', 6) . substr($cardNumber, -4);
    }

    /**
     * Format phone number with mask.
     * Example: 998901234567 -> +998 (90) 123-45-67
     */
    public static function phone_mask(string $phone): string
    {
        $clean = preg_replace('/\D/', '', $phone);

        if (strlen($clean) === 12) {
            return '+'.substr($clean, 0, 3) . ' (' . substr($clean, 3, 2) . ') ' . substr($clean, 5, 3) . '-' . substr($clean, 8, 2) . '-' . substr($clean, 10);
        }

        return $phone; // fallback
    }

    /**
     * Check if phone number belongs to Uzbekistan.
     * Returns true if starts with 998
     */
    public static function phone_country_check(string $phone): bool
    {
        return substr(preg_replace('/\D/', '', $phone), 0, 3) === '998';
    }
}

