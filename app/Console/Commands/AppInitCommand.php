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

        $this->task("🌱 Running all database seeders", function () {
            try {
                Artisan::call('db:seed');
                return true;
            } catch (Throwable $e) {
                $this->error("Seeding failed: " . $e->getMessage());
                return false;
            }
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
