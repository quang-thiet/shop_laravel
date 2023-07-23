<?php

namespace App\Http\Controllers\Client;

use App\Events\OrderEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Jobs\ProcessOrderEvent;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckOutController extends Controller
{
    public function index()
    {

        $carts = session()->get('carts');
        $user = Auth::user();
        
        return view('Screen.client.checkout', compact('carts','user'));
    }


    public function ProcessCheckout(CheckoutRequest $request)
    {
        

        DB::beginTransaction();

        $sub_total = 0 ;

        $data = $request->only('email','number_phone','address','note');

        $data['full_name']= $request->input('first_name').' '.$request->input('last_name');

        $data['user_id'] = Auth::user()->id ;

        
       
        try {

            $carts = session()->get('carts');
            $new_array = collect($carts)->values();
            $new_array->toArray();
          
            foreach($carts as $value){

                $sub_total += $value['total']; 
                $products =  Product::findOrfail($value['id'])->decrement('quantity',$value['quantity']);

            }
            
            $grand_total = $sub_total + 2;
            $data['sub_total'] = $sub_total ;
            $data['grand_total'] = $grand_total;
            $order = Order::query()->create($data);
        
            $data_item = [];
            foreach($new_array as &$item){

                $item['product_id'] =$item['id'];
                $item['order_id'] = $order->id ;
                $item['product_name']=$item['name'];
                $data_item[] = $item;
                
            }
            
            $order->items()->createMany($data_item);
            $data_order = Order::find($order->id);
            $data_items = $data_order->user();
            ProcessOrderEvent::dispatch($data,$data_items);
            
            dd('end');
            session()->forget('carts');
            DB::commit();

            return view('Screen.client.checkout-success')
             ->with('address', $data['address'])
                        ->with('email', $request->email)
                        ->with('phone', $request->phone)
                        ->with('full_name', $data['full_name'])
                        ->with('order_id', '#' . $order->id);

        } catch (\Exception $e) {

            dd($e);
            Log::error($e->getLine().'/nLIne: ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with('error','đã xảy ra lỗi vui lòng thử lại!!!');
        }

    }

    public function track()
    {

    }


   
}
