<?php

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Jobs\ProcessOrderEvent;
use App\Models\Carts;
use App\Models\Order;
use App\Models\Product;
use App\Models\Surcharge;
use App\Models\User;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class CheckOutController extends Controller
{
    public function index()
    {
        $result = new CartService ;
        $carts =  $result->get_cart();
        if(!empty($cart)){
            return redirect()->back()->with('error','bạn không thể checkout khi giỏ hàng trống !!');
        }
        $surcharge = Surcharge::get();
        $user = User::find(Auth::id());
        $total = total_cart($carts, $surcharge);
        return view('Screen.client.checkout', compact('carts','user','total'));

    }


    public function ProcessCheckout(CheckoutRequest $request)
    {
        

        DB::beginTransaction();
        
        $data = $request->only('email','number_phone','address','note');
        $data['full_name']= $request->input('first_name').' '.$request->input('last_name');
        $data['user_id'] = Auth::user()->id ;
        try {

            $result = new CartService;
            $carts = $result->get_cart();
            foreach($carts as $value){
                $products =  Product::findOrfail($value['product_id'])->decrement('quantity',$value['quantity']);
            }
            $surcharge = Surcharge::get();
            $total = total_cart($carts, $surcharge);
            $data['sub_total'] = $total['sub_total'] ;
            $data['grand_total'] = $total['grand_total'];
            $order = Order::query()->create($data);
            $data_item = [];
            foreach($carts as &$item){
                $item['order_id'] = $order->id ;
                $item['product_name']=$item['name'];
                //$item->toArray;
                $data_item[] = $item;
            }

            $new_data = array_map(function ($item){
                $item->toArray();
                $result['id'] = $item ->id;
                $result['product_id'] = $item ->product_id;
                $result['order_id'] = $item ->order_id;
                $result['product_name'] = $item ->product_name;
                $result['quantity'] = $item ->quantity;
                $result['price'] = $item ->price;
                $result['total'] = $item ->total;               
                return $result ;
            },$data_item);
           
            $order->items()->createMany($new_data);
            $delete_carts = Carts::where('user_id',Auth::id())->delete();
            $data_order = Order::find($order->id);
            $data_orders = $data_order->load('items');
            $to_email =  $data['email'];
         
            dispatch(new  ProcessOrderEvent( $to_email , $data_orders));
            Cookie::queue(Cookie::forget('carts'));
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
