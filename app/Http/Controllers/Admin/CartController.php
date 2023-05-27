<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function store(Request $request, $id){
      if ($request->session()->exists('product'.$id)) {
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
        $data['id']= $id ;
        $data['image']= $product->image;
        $data['name']= $product->name;
        $a = Session::get('product'.$id);
        $data['quantity'] = $request->input('quantity') + $a['quantity'];
        $data['Total'] = $data['price'] *$data['quantity'];
        Session()->put('product'.$id,$data);
     
        return redirect()->back()->with('success','them thanh cong');
 
      }else{ 
        
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
        $data['image']= $product->image;
        $data['name']= $product->name;
        $data['quantity'] =$request->input('quantity');
        $data['Total'] = $data['price'] *$data['quantity'];
        Session()->put('product'.$id,$data);
        $value = $request->session()->pull( $id, 'image');
        return redirect()->back()->with('success','them thanh cong');
        
      }


    }
    public function delete_session( Requset $request , $id){
      $request->Session()->forget('product'.$id);
      return redirect()->back()->with('success','da san phanm trong gio hang');
     }
      
}
