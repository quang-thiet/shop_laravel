<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function ProcessRegister(RegisterRequest $request)
    {

        $data = $request->all();
        
        if($data['password']===$data['retype-password'])
        {
            
                $data['password']=Hash::make($request->password);
                User::create($data);
                return redirect()->route('login')->with('success','đăng kí thành công');
            
        }else{
            return redirect()->back()->withInput()->with('errors','Mật khẩu không trùng khớp');
        }


    }
}
