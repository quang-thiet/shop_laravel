<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
    public function index(){
      // session()->forget('carts');
      $carts = session()->get('carts') ;
      return view('Screen.client.carts',compact('carts'));
    }   


    public function store(Request $request, $id){
     
      $product = DB::table('products')
      ->select('name','image','price','discount','quantity')
      ->where('published','=', 1)
      ->where('id',$id)
      -> first();
        
      $carts = session()->get('carts');
      
      if(isset($carts[$id])){
       
        $data =  $carts[$id]['quantity'] += $request->input('quantity');
        
        if(!empty($product->discount) && (int)$product->discount != (int)$carts [$id]['price']){

        $carts[$id]['price']= $product->discount;
         
        }
       
        if( (int)$data >(int)($product->quantity) ){

         return back()->with('error',' sản phẩm vượt quá giớ hạn vui
          lòng kiểm tra lại giỏ hàng  !');

        }

        $carts[$id]['quantity'] = $data;
        $carts[$id]['price']= $product->price;
        $carts[$id]['total'] = $carts[$id]['quantity'] * $carts[$id]['price'];
        


      }else{
        

        if(empty($product->discount)){

          $carts[$id]=[
            'id'      => $id,
            'name'    => $product->name,
            'price'   => $product->price,
            'image'   => $product->image,
            'quantity'=> $request->input('quantity')
  
          ];
          
            
            session()->put('carts',$carts);
            return back()->with('success','thêm thành công vào giỏ hàng'); 
        }

      
        $carts[$id]=[
          'id'       => $id,
          'name'     => $product->name,
          'price'    => $product->discount,
          'image'    => $product->image,
          'total'    => $request->input('quantity')*$product->discount,
          'quantity' => $request->input('quantity')
        ]; 
        
      }
      session()->put('carts',$carts);
      return back()->with('success','thêm thành công vào giỏ hàngg');
    }



    public function update(Request $request){
      
      $data = $request->all();
      if(isset($data['abc'])){
        $carts = session()->get('carts');
        
        $cart_component= view('Screen.client.carts',compact('carts'))->render();
        return response()->json([
          'cart_component' => $cart_component
        ],200);
      }
     
      
      $product = DB::table('products')
      ->select('name','image','price','discount','quantity','id')
      ->where('published','=', 1)
      ->where('id',$data['id'])
      -> first();

      
     
      if(!empty($request->id) && !empty($request->quantity)){
        
        $carts = session()->get('carts');
        
        if((int)$data['quantity']>(int)$product->quantity){
          
          return response()->json(
            [
              'data'=>'sản phẩm '.$product->name.' '. 'hiện chỉ còn '.$product->quantity.' sản phẩm'
            ],
            );
        }


        $carts[$data['id']]['quantity'] = $data['quantity'];

        if(!empty($product->discount) && (int)$product->discount != (int)$carts[$data['id']]['price']){

          $carts[$data['id']]['quantity'] = $data['quantity'];

          $carts[$data['id']]['price'] = $product->discount;

          $carts[$data['id']]['total'] = $carts[$data['id']]['quantity'] * $carts[$data['id']]['price'];

        }

        $carts[$data['id']]['total'] = $carts[$data['id']]['quantity'] * $carts[$data['id']]['price'];

        session()->put('carts',$carts);

        return response()->json([
          'data'=>'update thành công '
        ],204);
        
      }

    }


    public function delete_session($id){
      $data = session()->get('carts');
      unset($data[$id]);
      session()->put('carts',$data);
      return redirect()->back()->with('success','xoa thành công');
     }
      
}
