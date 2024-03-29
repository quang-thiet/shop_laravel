<?php

namespace App\Providers;

use App\Events\OrderEvent;
use App\Events\update_cart_when_logged_in;
use App\Jobs\ProcessOrderEvent;
use App\Listeners\OrderListener;
use App\Listeners\ProccessCarts;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;



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
        // OrderEvent::class=>[
        //     OrderListener::class
        // ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Event::listen(OrderEvent::class,OrderListener::class);
        // Event::listen(OrderEvent::class,ProcessOrderEvent::class);
        Event::listen(update_cart_when_logged_in::class,ProccessCarts::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
