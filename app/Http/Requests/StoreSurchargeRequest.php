<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurchargeRequest extends FormRequest
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
            'name'=>'required',
            'value'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         =>':attribute vui lòng không bỏ trống !! ',
            'value.required'        =>':attribute vui lòng không để trống !!',
            'value.integer'         =>':attribute không phù hợp vui lòng kiểm tra lại !',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Tên loại phí ',
            'value'=> 'Giá trị'
        ];

    }
}
