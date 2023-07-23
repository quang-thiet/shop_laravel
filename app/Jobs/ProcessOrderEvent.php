<?php

namespace App\Jobs;

use App\Events\OrderEvent;
use App\Mail\order_comfirm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ProcessOrderEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data_items , $data_order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data_order,$data_items)
    {
        $this->data_items = $data_items ;
        $this->data_order = $data_order ;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {    
       try {
        //code...
       } catch (\Exception  $e) {
         Log::alert();
       }
    }
}
