<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function store(Request $request, $id){
       $data=[];
       Session()->put('cart_products',[]);
       $product = DB::table('products')
       ->select('name','image','price','discount')
       ->where('published','=', 1)
       ->where('id',$id)
       -> first();
      if(!empty($product->discount)){
        $data['price'] = $product->discount ;
      }{
        $data['price'] = $product->price;
      }
       $data['name']= $product->name;
       $data['quantity'] = $request->input('quantity');
       $data['Total'] = $data['price'] *$data['quantity'];
        
       Session()->push('cart_products',['id' =>5 ,'price' => 222 ,'name'=> 'abd' ,'quantity' => 2 ,'total' =>196]);
       Session()->push('cart_products',['id' =>2,'price' => 222 ,'name'=> 'abd' ,'quantity' => 2 ,'total' =>196]);
        session()->forget('cart_products', ['id'=> 5]);
       $a = Session::get('cart_products');
       dd($a);
       foreach($a as $item ){
     
       $item ['name'] ='thiet';
       Session::put($item);
       
       }
     
    }
}
