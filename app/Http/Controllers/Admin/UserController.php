<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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

    public function store(Request $request)
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
        return redirect()->route('user.list')->with('success','thêm thành công');
        

    }
    public function edit($id)
    {

        $user = User::find($id);
        return view('Screen.admin.user.edit',compact('user'));

    }

    public function update(UpdateUserRequest $request , $id)
    {
        $data = $request->all();
       if (isset($data['thumbnail'])) {
        $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
        $fileName = 'user-'.time().".".$fileExtension;
        $request->file('thumbnail')->move('image/users',$fileName);
        $data['avatar']=$fileName;
        $data['created_at']= now();
        $data['update_at'] =now();
       }
        User::find($id)->update($data);
        return redirect()->route('user.list')->with('success','cập thành công');
        
    }

    public function destroy($id){
        $user =User::find($id);
        $user->delete();
        return redirect()->back()->with('success','xóa thành công!');
    }


}
