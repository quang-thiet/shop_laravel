<?php

namespace App\Livewire;

use App\Models\Carts;
use App\Models\Surcharge;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use function Termwind\render;

class UpdateCarts extends Component
{


    public $carts, $surcharge, $total = [];


    public function __construct()
    {
        $surcharges = Surcharge::get();
        $this->surcharge = $surcharges;
        $data = new CartService;
        $this->carts =  $data->get_cart();
        $total = total_cart($this->carts, $this->surcharge);
    }


    public function increment($id, $quantity)
    {
        ++$quantity;
        $this->update_cart($id, $quantity);
    }


    public function decrement($id, $quantity)
    {
        --$quantity;
        $this->update_cart($id, $quantity);
    }


    public function update_cart($id, $quantity)
    {

        $product = DB::table('products')
            ->select('name', 'image', 'price', 'discount', 'quantity', 'id')
            ->where('published', '=', 1)
            ->where('id', $id)
            ->first();

        if ( !empty($product->discount)) {
            $product->price = $product->discount;
        }
        
        if ($quantity > $product->quantity) {

            $message =  'sản phẩm ' . $product->name . ' ' . 'hiện chỉ còn ' .    $product->quantity . ' sản phẩm';
            session()->flash('error', $message);
            $this->render();
            return;
        }



        if (Auth::check()) {
            $new_data = [
                'name'      => $product->name,
                'user_id'   => Auth::id(),
                'product_id' => $product->id,
                'price'     => $product->price,
                'image'     => $product->image,
                'quantity' => $quantity,
                'total' => $quantity * $product->price,
            ];
            $cart = Carts::where('product_id', $id)->update($new_data);
            $this->js("alert('update thành công !!')");
        } else {

            $carts = $this->carts;

            //set lại giá trị quantity và total
            $new_data = [
                'name'      => $product->name,
                'user_id'   => Auth::id(),
                'product_id' => $product->id,
                'price'     => $product->price,
                'image'     => $product->image,
                'quantity' => $quantity,
                'total' => $quantity * $product->price,
            ];
            $carts[$id]['quantity'] = $quantity;
            $carts[$id]['total'] = $quantity * $product->price;

            //update lại 
            Cookie::queue('carts', json_encode($carts), 3600 * 336); // 2 week
            $this->js("alert('update thành công !!')");
            // $data = new CartService;
            // $this->carts = $data->get_cart();
        }
    }

    public function delete($id){
       
        if (Auth::check()) {

            $cart = Carts::where('product_id', $id)->delete();
            $this->render();
            session()->flash('success','xoá thành công!!');
          } else {
          
            $carts = Cookie::get('carts') ?? "[]";
            $carts = json_decode($carts, true);
            unset($carts[$id]);
            Cookie::queue('carts', json_encode($carts), 3600 * 336); // 2 week
            $this->render();
            session()->flash('success','xoá thành công!!');
            
          }
    }
    
    public function redirect_checkout()
    {
        redirect()->route('check.out');
    }

    public function render()
    {
        return view('livewire.update-carts');
    }
}
