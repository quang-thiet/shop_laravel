<?php

namespace App\Services;

use App\Models\Carts;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class CartService
{

    public function get_cart()
    {


        try {
            if (Auth::check()) {

                $data  = User::find(Auth::id());
                $carts = $data->carts;
                if (!empty($carts)) {
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
                }
            } else {

                $data_cart = Cookie::get('carts') ?? "[]";
                $carts = json_decode($data_cart, true);

                    $carts = array_map(function ($cart){
                        $id = $cart['id'];
                        $product = Product::find($id);
                         
                        if ($product->discount != null) {
                            $product->price = $product->discount;
                        }

                        if ($product->published != 1 || $product->quantity == 0) {
                            unset($cart);
                        }
                        $cart['price'] = ($cart['price'] !== $product->price) ? $product->price : $cart['price'];
                        $cart['user_id'] = null ; 
                        $cart['product_id'] = $cart['id']; 
                        return $cart;
                    }, $carts);
        
                
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
