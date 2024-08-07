<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        foreach (config('database.connections') as $connectionName => $connection) {
            if ($connection['driver'] === 'sqlite') {
                DB::connection($connectionName)
                    ->statement(
                        '
                PRAGMA journal_mode = WAL;
                COMMIT;
                '
                    );
            }
        }
    }

    public function down(): void
    {
        //
    }
};
