<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'first_name' =>'required',
            'last_name' =>'required|string',
            'email' =>'required',
            'number_phone' =>'required',
            'address' =>'required',
            'note'=> 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'required'=>'vui lòng không bỏ trống !' ,
            'string'=>'vui lòng để dạng chuỗi'
        ];
    }
}
