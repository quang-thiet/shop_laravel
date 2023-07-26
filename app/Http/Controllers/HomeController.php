<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

  
        $products = Product::where('published','=','1')->paginate(4);
        $products->map(function($item){
           $item['slug'] = Str::slug($item['name']) ;
           return $item;
        });
        
        return view('Screen.client.home',compact('products'));
    }

  
}
