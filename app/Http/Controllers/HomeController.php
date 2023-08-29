<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;

        if($search){
            $products = Product::query()
            ->where('name','LIKE',"%{$search}%")
            ->paginate(8);

    
           $products->map(function ($item) {
                $item['slug'] = Str::slug($item['name']);
                return $item;
            });

            return view('Screen.client.home',compact('products'));
            
        }
    
        if(Cache::has('products')){
            $products = Cache::get('products');
            return view('Screen.client.home', compact('products'));
        }

        
        $products = Cache::remember('products',900,function(){
           $products= Product::where('published', '=', '1')->paginate(8);
           return  $products->map(function ($item) {
                $item['slug'] = Str::slug($item['name']);
                return $item;
            });
        }

       );
        
        return view('Screen.client.home', compact('products'));
    }

    public function test(){
        return view('Layout.client.main');
    }
}
