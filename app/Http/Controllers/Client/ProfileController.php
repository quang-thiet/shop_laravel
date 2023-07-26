<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateaddressProfileRequest;
use App\Http\Requests\UpdateInformationProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $user->load('orders');
        return view('Screen\client\profile', compact('user'));
    }

    public function update_address(UpdateaddressProfileRequest  $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->only('address', 'number_phone');
            $user = User::find(Auth::id())->update($data)->load('orders');
            if ($user) {
                Db::commit();
                return view('Screen\client\profile', compact('user'));
            } else {
                abort("403", "Something went wrong");
            }
        } catch (\Exception  $e) {

            Log::error($e->getLine() . '/nLIne: ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with('error', 'đã xảy ra lỗi vui lòng thử lại!!!');
        }
    }

    public function update_information(UpdateInformationProfileRequest $request)
    {
        $data = $request->except('_token');
       
        $user = User::find(Auth::id());

        if (!empty($data['current_password'])) {
           
            if (!Hash::check($data['current_password'], $user->password)) {

                return redirect()->back()->with('error', 'mật khẩu không đúng');
            } else {

                $validator =

                    $request->validate([
                        "new_password" => ["required"],
                        "confirm-pwd"  => ["required"],
                    ]);

                if ($validator['new_password'] === $validator['confirm-pwd']) {

                    $data['password'] = Hash::make($validator['new_password']);
                    

                } else {
                    return redirect()->back()->with('error', 'new password và confirm password không khớp ');
                }
            }
        }

        $user->update($data);
  
        return redirect()->back()->with('success','update thành công');


    }
}
