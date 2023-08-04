<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        // $data_cart = Cookie::get('carts') ?? "[]";
                
        // $carts = json_decode($data_cart, true);

        //     $carts = array_map(function ($cart){
        //         $id = $cart['id'];
        //         $product = Product::find($id);
                 
        //         if ($product->discount != null) {
        //             $product->price = $product->discount;
        //         }
                
        //         if ($product->published != 1 || $product->quantity == 0) {
        //             unset($cart);
        //         }
        //         $cart['price'] = ($cart['price'] !== $product->price) ? $product->price : $cart['price'];

                
        //         return $cart;
        //     }, $carts);

        //     dd($carts);
        // Cookie::queue(Cookie::forget('carts'));
      
        // $data_cart = Cookie::get('carts') ?? "[]";
    
        // $data_cart = json_decode($data_cart, true);
        
        //     if (!empty($data_cart)) {
        //     $carts = array_map(function ($cart){
        //         $id = $cart['id'];
        //         $product = Product::find($id);
                 
        //         if ($product->discount != null) {
        //             $product->price = $product->discount;
        //         }
                  
        //         $cart['price'] = ($cart['price'] !== $product->price) ? $product->price : $cart['price'];

        //         if ($product->published != 1 || $product->quantity == 0) {
        //             unset($cart);
        //         }
        //         return $cart;
        //     }, $data_cart);

        
        //     }
           
        //     dd($data_cart);
        $products = Product::where('published', '=', '1')->paginate(4);
        $products->map(function ($item) {
            $item['slug'] = Str::slug($item['name']);
            return $item;
        });

        return view('Screen.client.home', compact('products'));
    }
}
