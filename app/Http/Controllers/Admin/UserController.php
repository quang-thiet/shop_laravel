<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('Screen.admin.user.list',compact('users'));
    }

    public function add()
    {
        return view('Screen.admin.user.add');
    }

    public function storage(UserRequest $request)
    { 
        
        $data = $request->all();
       
        $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
        $fileName= 'user-'.time().'.'.$fileExtension;
        $request->file('thumbnail')->move('image/users',$fileName);
        $data['avatar']= $fileName;
        $data['password']= Hash::make($request->password);
        $data['created_at']= now();
        $data['update_at']=now();
        User::create($data);
        return redirect()->back()->with('success','thêm thành công');
        

    }
    public function edit($id)
    {

        $user = User::find($id);
        return view('Screen.admin.user.edit',compact('user'));

    }

    public function update(UserRequest $request)
    {
        $data = $request->all();
        $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
        $fileName = 'user-'.time().".".$fileExtension;
        $request->file('thumbnail')->move('images/users',$fileName);
        $data['avatar']=$fileName;
        $data['created_at']= now();
        $data['update_at'] =now();
        User::update($data);
        return redirect()->back()->with('success','câp nhật thành công ');

    }

    public function destroy($id){
        $user =User::find($id);
        $user->delete();
        return redirect()->back()->with('success','xóa thành công!');
    }


}
