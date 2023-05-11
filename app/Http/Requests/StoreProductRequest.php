<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required|integer',
            'discount'    => 'required|integer',
            'thumbnail'   => 'required|image',
            'quantity'    => 'required|integer',

        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute vui lòng không bỏ trống ',
            'integer'  => 'sai giá trị ,giá trị bắt buộc là số nguyên ',
            'image'    => 'file chọn sai định dạng , vui lòng chọn ảnh đúng định dạng'

        ];
    }

    public function attributes()
    {
        return [
            'name'        => 'Tên sản phẩm ',
            'description' => 'mô tả',
            'price'       => 'Giá sản phẩm',
            'discount'    => 'Giá giảm ',
            'thumbnail'       => 'Hình ảnh',
            'quantity'    => 'Số lượng sản phẩm'
        ];
    }
}
