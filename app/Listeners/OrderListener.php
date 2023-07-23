<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class OrderListener 
{    
    

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderEvent  $event
     * @return void
     */
    public function handle(OrderEvent $event)
    {   
    

        try {
            // Log::info([
            //     $event->data_items,
            //     $event->data_order
            // ]);
            
        } catch (\Exception $e) {
            Log::info($e);
        }
        
    }
}
