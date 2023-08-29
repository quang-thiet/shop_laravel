<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class WishlistController extends Controller
{
    public function index()
    {

        try {

            $wishlist = Cookie::get('wishlist') ?? [];

            
            $products = $wishlist;
           
            if (!empty($wishlist)) {

                $wishlist = (array)json_decode( $wishlist, true);

                $data = array_values($wishlist);
                $data = array_column($data,'id');

                $products = Product::whereIn('id', $data)->get();
          
                $products->map(function ($item) {

                    $item['slug'] = Str::slug($item['name']);
                    return $item;
                });
            }
            
            return view('Screen.client.wishlist', compact('products'));

        } catch (\Exception $e) {

            dd($e);

            Log::alert($e);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi !!');

        }
    }

    public function store($slug,$id)
    {

        try {

            $wishlist = Cookie::get('wishlist') ?? [];

            if(!empty($wishlist)){

                $wishlist = (array)json_decode( $wishlist, true);

            }
            $wishlist[$id] = [
                'id' => $id, 
                'slug' => $slug
            ];
            
            Cookie::queue('wishlist',json_encode($wishlist),3600 * 336);

            return redirect()->back()->with('success','Thêm thành công!!');

        } catch (\Exception $e) {
            
            dd($e);
            Log::error($e);
            return redirect()->back()->with('error','Đã xảy ra lỗi !!');
        }
    }

    public function destroy($id)
    {

        try {

            $wishlist = Cookie::get('wishlist');
            unset($wishlist[$id]);
            Cookie::forever('wishlist', $wishlist);
            return redirect()->back()->with('success', 'Đã xóa thành công !!');

        } catch (\Exception $e) {

            Log::error($e);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi , vui long thử lại !!');
        }
    }
}
