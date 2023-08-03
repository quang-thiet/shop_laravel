<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Surcharge;
use App\Models\User;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
  public function index()
  {

    $data = new CartService;
    $surcharge = Surcharge::get();
    $carts = $data->get_cart();
    $total = total_cart($carts, $surcharge);

    return view('Screen.client.carts', compact('carts', 'total'));
  }


  public function store(Request $request, $product_id)
  {

    $data_request = $request->all();

    $product = DB::table('products')
      ->select('name', 'image', 'price', 'discount', 'quantity')
      ->where('published', '=', 1)
      ->where('id', $product_id)
      ->first();
    if ($product->discount != null) {
      $product->price = $product->discount;
    }
    if (Auth::check()) {
      $cart = Carts::where('product_id', $product_id)->get();
      //Nếu đã tồn tại thì chỉ cập nhật lại số lượng 
      if (!empty($cart)) {
        $cart->quantity  +=  $data_request['quantity'];
        //kiểm tra có vượt quá số lượng product hiện có hay không và bỏ qua trường hợp số lượng = nhau
        if ($cart->quantity > $product->quantity && $cart->quantity -  $product->quantity < 0) {
          return redirect()->back()->with('error', 'số lượng vượt ngưỡng cho phép vui lòng kiểm tra lại giỏ hàng !!');
        }
        $cart->save();
        return redirect()->back()->with('success', 'Sản phẩn đã được cập nhật lại số lượng trong giỏ hàng  !!');
      } else {
        $data_cart['quantity'] = $data_request['quantity'];
        if ($data_cart['quantity'] > $product->quantity) {
          return redirect()->back()->with('error', 'số lượng vượt ngưỡng cho phép vui lòng kiểm tra lại giỏ hàng !!');
        }
        // dùng thông tin lấy từ sẩn phẩm rồi set lại thông tin để thêm vào database
        $data_cart = [

          'name'      => $product->name,
          'user_id'   => Auth::id(),
          'product_id' => $product->id,
          'price'     => $product->price,
          'image'     => $product->image,
          'total'     => $data_cart['quantity'] * $product->price,

        ];

        $cart = Carts::insert($data_cart);
        return redirect()->back()->with('success', 'Thêm thành công sản phẩm vào giỏ hàng !!');
      }
    }
    // chưa login 

    $carts = Cookie::get('carts') ?? "[]";
    $carts = (array)json_decode($carts, true);

    if (isset($carts[$product_id])) {
      $data =  $carts[$product_id]['quantity'] += $request->input('quantity');

      //kiểm tra có vượt quá số lượng product hiện có hay không và bỏ qua trường hợp số lượng = nhau

      if ((int)$data > (int)($product->quantity) && $data - $product->quantity < 0) {

        return back()->with('error', '  số lượng sản phẩm vượt quá giớ hạn vui
          lòng kiểm tra lại giỏ hàng  !!');
      }

      //set data để thêm vào sesstion
      $carts[$product_id]['quantity'] = $data;
      $carts[$product_id]['price'] = $product->price;
      $carts[$product_id]['total'] = $carts[$product_id]['quantity'] * $carts[$product_id]['price'];
    } else {

      //set data để thêm vào sesstion 
      $carts[$product_id] = [
        'id'       => $product_id,
        'name'     => $product->name,
        'price'    => $product->price,
        'image'    => $product->image,
        'total'    => $request->input('quantity') * $product->discount,
        'quantity' => $request->input('quantity')
      ];
    }

    Cookie::queue('carts', json_encode($carts), 3600 * 336); // 2 week
    return back()->with('success', 'thêm thành công vào giỏ hàng!!');
  }



  public function update(Request $request)
  {

    $data = $request->all();

    //render lại để cập nhật 
    if (isset($data['abc'])) {
      $carts = session()->get('carts');
      $cart_component = view('Screen.client.carts', compact('carts'))->render();
      return response()->json([
        'cart_component' => $cart_component
      ], 200);
    }

    //lấy thông tin sản phẩm 
    $product = DB::table('products')
      ->select('name', 'image', 'price', 'discount', 'quantity', 'id')
      ->where('published', '=', 1)
      ->where('id', $data['id'])
      ->first();

    //kiểm tra có vượt quá số lượng product hiện có hay không và loại trừ trường hợp số lượng = nhau 

    if ((int)$data['quantity'] > (int)$product->quantity && (int)$data['quantity'] - (int)$product->quantity < 0) {
      return response()->json(
        [
          'data' => 'sản phẩm ' . $product->name . ' ' . 'hiện chỉ còn ' .    $product->quantity . ' sản phẩm'
        ],
      );
    }


    if (Auth::check()) {

      //set lại giá trị quantity và total
      $new_data = [
        'quantity' => $data['quantity'],
        'total'    => $data['quantity'] * $product->price,
      ];
      $cart = Carts::where('product_id', $data['id'])->update($new_data);
      return response()->json([
        'data' => 'update thành công',
      ], 204);
    } else {

      if (!empty($request->id) && !empty($request->quantity)) {

        $carts = session()->get('carts');
        //set lại giá trị quantity và total
        $carts[$data['id']]['quantity'] = $data['quantity'];
        $carts[$data['id']]['total'] = $carts[$data['id']]['quantity'] * $carts[$data['id']]['price'];
        //update lại 
        Cookie::queue('carts', json_encode($carts), 3600 * 336); // 2 week
        return response()->json([
          'data' => 'update thành công',
        ], 204);
      }
    }
  }


  public function delete_session($product_id)
  {

    if (Auth::check()) {

      $cart = Carts::where('product_id', $product_id)->delete();
      return redirect()->back()->with('success', 'xoa thành công');
    } else {

      $carts = Cookie::get('carts') ?? "[]";
      $carts = json_decode($carts, true);
      unset($carts[$product_id]);
      Cookie::queue('carts', json_encode($carts), 3600 * 336); // 2 week
      return redirect()->back()->with('success', 'xoa thành công');
    }
  }
}
