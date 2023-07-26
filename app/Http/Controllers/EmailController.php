<?php

namespace App\Http\Controllers;

use App\Mail\order_comfirm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function  Send_mail(){
       
        $user =['ab' => 2 , 'ac' => 'bc'];
        $emailable = new order_comfirm($user,'abc','email');
        Mail::to('147thiet@gmail.com')->send($emailable);
        return true ;
    }
}
