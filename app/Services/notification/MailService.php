<?php

namespace App\Services\notification;

use Illuminate\Support\Facades\Mail;

class MailService
{
    /**
     * Send a simple email to a single recipient.
     */
    public function sendMail(string $to, string $subject, string $body, array $data = [])
    {
        Mail::raw($body, function ($message) use ($to, $subject) {
            $message->to($to)
                ->subject($subject);
        });

        // Optionally log or return success
        return true;
    }

    /**
     * Send bulk emails to multiple recipients.
     */
    public function sendBulkMail(array $recipients, string $subject, string $body)
    {
        foreach ($recipients as $to) {
            $this->sendMail($to, $subject, $body);
        }

        return true;
    }

    /**
     * Send using a Mailable class (recommended for HTML + Blade)
     */
    public function sendMailable(string $to, \Illuminate\Mail\Mailable $mailable)
    {
        Mail::to($to)->send($mailable);
    }
}
