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
        // You can fetch from DB or config or cache
        $settings = [
            'two_factor_auth' => config('app.two_factor_auth', false),
            // add other settings as needed
        ];

        return view('settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        // Validate incoming setting values
        $request->validate([
            'two_factor_auth' => 'required|boolean',
        ]);

        // Store in config/cache/db — here is just an example
        // Ideally save to DB, but for demo:
        Cache::put('settings.two_factor_auth', $request->two_factor_auth);

        return back()->with('success', 'Settings updated successfully.');
    }


}
