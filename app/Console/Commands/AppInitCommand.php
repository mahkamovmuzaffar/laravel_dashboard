<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Throwable;

class AppInitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app-init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate users, roles, permissions, error messages, and check services.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->newLine(2);
        $this->info('🚀 Starting system population...');

        // --- USERS ---
        $this->task("👤 Populating users", function () {
            Artisan::call('db:seed', ['--class' => 'UserSeeder']);
            return true;
        });

        // --- ERROR MESSAGES ---
        $this->task("❗ Seeding error messages", function () {
            try {
                Artisan::call('db:seed', ['--class' => 'ErrorMessageSeeder']);
                return true;
            } catch (Throwable $e) {
                $this->error("ErrorMessageSeeder failed: " . $e->getMessage());
                return false;
            }
        });

        // --- ROLES ---
        $this->task("🔐 Populating roles", function () {
            Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
            return true;
        });

        // --- PERMISSIONS ---
        $this->task("🛡️ Populating permissions", function () {
            Artisan::call('db:seed', ['--class' => 'PermissionSeeder']);
            return true;
        });

        // --- SERVICES ---
        $this->task("🔍 Checking service configs", function () {
            $missing = [];

            foreach (['TELEGRAM_TOKEN', 'WHATSAPP_TOKEN', 'OPENAI_KEY'] as $envVar) {
                if (!env($envVar)) $missing[] = $envVar;
            }

            if (count($missing)) {
                $this->warn("Missing env values: " . implode(', ', $missing));
                return false;
            }

            return true;
        });

        $this->newLine();
        $this->info('✅ All done. System is ready.');
        $this->newLine();
    }
}
