<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class CartController extends Controller
{
    public function store(Request $request, $id){
     
      $product = DB::table('products')
      ->select('name','image','price','discount','quantity')
      ->where('published','=', 1)
      ->where('id',$id)
      -> first();
        
      $carts = session()->get('carts');
      
      if(isset($carts[$id])){

        $carts[$id]['quantity'] += $request->input('quantity');
        $carts[$id]['total'] = $carts[$id]['quantity'] * $carts[$id]['price'];
        if( $carts[$id]['quantity'] += $request->input('quantity')>(int)($product->quantity) ){

         return back()->with('error','số lượng sản phẩm vượt quá giớ hạn vui lòng kiểm tra lại giỏ hàng!!');

       }

       return back()->with('success','cập nhật thành công');
       
      }else{
        $carts[$id]=[
          'name'  => $product->name,
          'price' =>$product->price,
          'image' =>$product->image,
          'quantity'=>$request->input('quantity')

        ];     
      }

      

      session()->put('carts',$carts);
      echo "<pre>";
      print_r($carts);
      View::share('carts',$carts);
    }
    public function delete_session( Request $request , $id){
      $request->Session()->forget('carts'.[$id]);
      return redirect()->back()->with('success','xoa thành công');
     }
      
}
