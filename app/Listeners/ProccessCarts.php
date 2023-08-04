<?php

namespace App\Listeners;

use App\Events\update_cart_when_logged_in;
use App\Models\Carts;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProccessCarts
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
   * @param  \App\Events\update_cart_when_logged_in  $event
   * @return void
   */
  public function handle(update_cart_when_logged_in $event)
  {
    DB::beginTransaction();
    try {

      $data_carts = array_map(function ($item) {
        $item['user_id'] = Auth::id();
        $item['product_id'] = $item['id'];
        unset($item['id']);
        return $item;
      }, $event->data_carts);

      $carts =  Carts::insert($data_carts);
     
      DB::commit();

    } catch (\Exception $e) {

      Log::error($e->getLine() . '/nLIne: ' . $e->getMessage());
      DB::rollBack();
      return redirect()->back()->with('error', 'đã xảy ra lỗi vui lòng thử lại!!!');

    }
  }
}
