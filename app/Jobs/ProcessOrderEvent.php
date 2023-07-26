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
    public $email , $data_order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to_email,$data_order,)
    {
        $this->email = $to_email ;
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

        Log::info($this->data_order);
        
        $data_email  = new order_comfirm($this->data_order,'xác nhận đơn hàng từ Funiture Ecommerce ');
        Mail::to($this->email)->send( $data_email);
        
           
       } catch (\Exception  $e) {
        dd($e);
         Log::alert($e->getMessage());
       }
    }
}
