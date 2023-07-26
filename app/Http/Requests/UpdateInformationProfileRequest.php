<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInformationProfileRequest extends FormRequest
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
            'first_name'        => 'required|string',
            'last_name'         => 'required|string',
            'display_name'      => 'required|string',
            'email'             => 'required|email|unique:users,email',
            'current_password'  => 'nullable',
            'new_password'      => 'nullable',
            'confirm-pwd'       => 'nullable'
        ];
    }
    
    public function messages()
    {
        return [
            'first_name.required' =>'vui lòng không để trống !!',
            'last_name.required'   =>'vui lòng không để trống!!' ,
            'display_name.required'=>'vui lòng không tên hiển thị trống ' ,
            'email.required'=>"Email là bắt buộc",
            "email.email"=>"email không đúng vui lòng kiểm tra lại ",
            "email.unique" => "emil này đã tồn tại vui lòng chọn email khác",
        ];
    }
}
