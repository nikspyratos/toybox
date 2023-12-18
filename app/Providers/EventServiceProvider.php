<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\BlogPost;
use App\Observers\BlogPostObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Queue\Events\QueueBusy;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        QueueBusy::class => [
            // Stub
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        BlogPost::observe(BlogPostObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
