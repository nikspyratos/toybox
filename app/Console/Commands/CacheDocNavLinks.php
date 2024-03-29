<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Helpers\DocumentationHelper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheDocNavLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cache-doc-nav-links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Cache::rememberForever('doc-lav-links', static fn (): array => DocumentationHelper::generateNavArray());
    }
}
