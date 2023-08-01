<?php

namespace App\Services;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartService
{

    public $cart;


    public function __construct()
    {
    }

    public function get_cart()
    {

        
        try {
            if (Auth::check()) {
                
                $carts  = Carts::find(Auth::id());

                $carts->map(function ($item) {
                    $product = Product::find($item->product_id);
                    if ($product->discount === null) {

                        unset($product->discount);
                    } else {

                        $product->price = $product->discount;
                        unset($product->discount);
                    }

                    $item->price == $product->price ?? $item->price = $product->price;

                    $item->name == $product->name ?? $item->name = $product->name;

                    if ($product->published != 1 || $product->quantity == 0) {
                        unset($cart);
                        return null;
                    }
                    return $item;
                })->toArray();
               

            } else {
                
                $data_cart = session()->get('carts');
                $data = array_values($data_cart);
                $carts = array_map(function ($cart){
                    $product = Product::find($cart['id']);
                    if ($product->discount === null) {

                        unset($product->discount);
                    } else {

                        $product->price = $product->discount;
                        unset($product->discount);
                    }
                    
                    $cart['price'] = ($cart['price'] !== $product->price) ? $product->price : $cart['price'];

                    if ($product->published != 1 || $product->quantity == 0) {

                        unset($cart);
                       
                    }
                    return $cart;
                }, $data);

                
            }

            $carts ?? $carts = [];

            return $carts;

        } catch (\Exception $e) {
            dd($e);
            Log::error($e->getLine() . '/nLIne: ' . $e->getMessage());
           
            return redirect()->back()->with('error', 'đã xảy ra lỗi vui lòng thử lại!!!');
        }
    }

    
}
