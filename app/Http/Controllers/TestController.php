<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }

    public function process(Request $request ){
        $user = User::find(1);
       $token = $user->createToken('auth_token')->plainTextToken;
        dd('end');
       
    }
}
