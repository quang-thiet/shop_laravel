<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'retype-password'=>'required|min:6',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>':attribute vui lòng không để trống',
            'name.min'=>':attribute tối thiểu 3 ký tự',
            'email.required'=>':attribute vui lòng không để trống ',
            'email.email'=>':attribute vui lòng kiểm tra lại ,định dạng không đúng',
            'retype-password.required'=>':attribute vui lòng không để trống ',
            'retype-password.min'=>':attribute tối thiểu 6 ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Tên',
            'email'=>'Email',
            'password'=>'Mật khẩu',
            'retype-pasword'=>'Phần nhập lại mật khẩu'
        ];
    }
}
