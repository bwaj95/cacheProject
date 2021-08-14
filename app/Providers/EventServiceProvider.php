<?php

namespace App\Providers;

use App\Models\AuthorsBwaj;
use App\Models\AuthorsGana;
use App\Models\AuthorsJason;
use App\Observers\AuthorsBwajObserver;
use App\Observers\AuthorsGanaObserver;
use App\Observers\AuthorsJasonObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        AuthorsBwaj::observe(AuthorsBwajObserver::class);
        AuthorsGana::observe(AuthorsGanaObserver::class);
        AuthorsJason::observe(AuthorsJasonObserver::class);
    }
}
