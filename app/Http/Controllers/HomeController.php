<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::where('published','=','1')->paginate(10);
        return view('Screen.client.home',compact('products'));
    }

    public function SingleProduct($slug,$id){

        $product = Product::find($id);
        return view('Screen.client.single-product',compact('product'));

    } 
}
