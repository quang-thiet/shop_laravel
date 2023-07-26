<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateaddressProfileRequest extends FormRequest
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
            'address'      =>  'required',
            'number_phone' =>  'required|numeric|regex:/(0)[0-9]{9}$/',
        ];
    }

    public function messages()
    {
        return [
            'address.required' => ':attribute vui lòng không bỏ trống',
            'number_phone.required' => ':attribute vui lòng không bỏ trống',
            'number_phone.numeric'  => ':attribute không đúng định dạng về kiểu ,vui lòng kiểm tra lại ',
            'number_phone.size'     => ':attribute không đúng size, vui lòng kiểm tra lại',
            'number_phone.regex'     => ':attribute không đúng , vui lòng kiểm tra lại',
        ];
    }

    public function attributes()
    {
        return [
            "address"       =>"Địa chỉ",
            "number_phone"   =>'Số điện thoại ',
        ];
    }
}
