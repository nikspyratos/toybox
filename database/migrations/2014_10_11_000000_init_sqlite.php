<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $connections = ['sqlite', 'cache_db', 'pulse_db', 'queue_db', 'telescope_db'];
        foreach ($connections as $connection) {
            DB::connection($connection)
                ->statement(
                    '
                PRAGMA journal_mode = WAL;
                COMMIT;
                '
                );
        }
    }

    public function down(): void
    {
        //
    }
};
