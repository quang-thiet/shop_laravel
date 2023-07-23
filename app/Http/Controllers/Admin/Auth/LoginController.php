<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
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
    
        $data =[
            'email'=>$request->email,
            'password'=>$request->password

        ] ;
    
        if(Auth::attempt($data,$remember))
        {
            $previous_url = session()->get('previous_url');
            session()->forget('previous_url');
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
