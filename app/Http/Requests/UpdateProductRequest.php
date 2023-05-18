<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|image',
            'discount' =>'required',
            'quantity' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'required' =>'vui long không bỏ trống mục này',
            'image' =>'sai định dạng'
        ];
    }
}
