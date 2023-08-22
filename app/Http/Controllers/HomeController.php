<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
     
        $menu  = Category::get();
        $products = Product::where('published', '=', '1')->paginate(4);
        $products->map(function ($item) {
            $item['slug'] = Str::slug($item['name']);
            return $item;
        });

        return view('Screen.client.home', compact('products'));
    }

    public function test(){
        return view('Layout.client.main');
    }
}
