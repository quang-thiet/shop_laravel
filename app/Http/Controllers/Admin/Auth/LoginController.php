<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('user.list');
        }
        return view('Auth.login');
    }
    public function ProcessLogin(LoginRequests $request)
    {
        $remember= $request->input('remember')? true : false ;
    
        $data =[
            'email'=>$request->email,
            'password'=>$request->password

        ] ;
    
        if(Auth::attempt($data,$remember))
        {
            return redirect()->back();
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
