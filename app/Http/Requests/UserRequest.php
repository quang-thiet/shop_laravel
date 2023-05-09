<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:225',
            'email'=>'required|email',
            'password'=>'required|min:6'
            
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>':attribute không được bỏ trống',
            'name.max'=>':attribute ký tự tối đa là 225 ký tự',
            'email.required'=>':attribute vui lòng không để trống',
            'email.email'=>':attribute sai định dạng',
            'password.required'=>':attribute tối thiểu 6 ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Tên',
            'email'=>'Email',
            'password'=>'Mật khẩu',
            'thumbnail'=>'Ảnh đại diện'
        ];
    }
}
