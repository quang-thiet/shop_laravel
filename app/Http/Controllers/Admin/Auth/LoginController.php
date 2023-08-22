<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Events\update_cart_when_logged_in;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(){
        Session::put('previous_url',url()->previous());
        return view('Auth.login');
    }


    public function ProcessLogin(LoginRequests $request)
    {
        $remember= $request->input('remember')? true : false ;
        $data = new CartService;
        $carts =  $data->get_cart();
        $data =[
            'email'=>$request->email,
            'password'=>$request->password

        ] ;
    
        if(Auth::attempt($data,$remember))
        {
            // xử lý giỏ hàng
            $previous_url = session()->get('previous_url');
            session()->forget('previous_url');
           
            if ($previous_url == route('list.cart.user')){

             
               if (!empty($carts)) {
                $carts = array_values($carts);
                event(new update_cart_when_logged_in($carts));
               }
              
            }
            return redirect()->to($previous_url);
        }{
           return redirect()
            ->back()
            ->withInput()
            ->with('error','tài khoản hoặc mật khẩu không chính xác');
        }
        
    }

    public function Logout()
    {
        session()->flush();
        auth()->Logout();
        return redirect()->back();

    }
    
}
