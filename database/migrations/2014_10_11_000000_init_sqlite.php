<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (config('database.default') == 'sqlite') {
            DB::connection('sqlite')
                ->statement(
                    '
                PRAGMA journal_mode = WAL;
                PRAGMA synchronous = NORMAL;
                PRAGMA journal_size_limit = 67108864; -- 64 megabytes
                PRAGMA mmap_size = 134217728; -- 128 megabytes
                PRAGMA cache_size = 2000;
                PRAGMA busy_timeout = 5000;
                COMMIT;
                '
                );
            DB::connection('pulse')
                ->statement(
                    '
                PRAGMA journal_mode = WAL;
                PRAGMA synchronous = OFF;
                PRAGMA journal_size_limit = 67108864; -- 64 megabytes
                PRAGMA mmap_size = 134217728; -- 128 megabytes
                PRAGMA cache_size = 2000;
                PRAGMA busy_timeout = 5000;
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
