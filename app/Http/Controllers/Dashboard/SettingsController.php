<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;

class SettingsController extends Controller
{

    public function index()
    {
        // Example: from DB, file, or config
        $settings = [
            'telegram_token' => config('services.telegram.token'),
            'whatsapp_token' => config('services.whatsapp.token'),
            'whatsapp_token' => config('services.whatsapp.token'),
            'openai_key'     => config('services.openai.key'),
        ];

        return view('settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'telegram_token' => 'nullable|string',
            'whatsapp_token' => 'nullable|string',
            'openai_key'     => 'nullable|string',
        ]);

        // Store these to DB or file — example using config:option, or custom Setting model
        foreach ($request->only(['telegram_token', 'whatsapp_token', 'openai_key']) as $key => $value) {
            \DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return back()->with('success', 'Settings saved successfully.');
    }



}
