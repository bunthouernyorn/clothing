<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'product_code' => 'required|min:3',
            'product_name' => 'required|min:3',
            'product_price' => 'required|numeric:3',
            'product_img' => 'image',
        ];
    }
    public function messages(){
        return [
            'product_code.required'=>'Mã sản phẩm không để trống!',
            'product_code.min'=>'Mã sản phẩm phải lớn 3 kỹ tự!',
            'product_name.required'=>'Tên sản phẩm không để trống!',
            'product_.name.min'=>'Tên sản phẩm phải lớn 3 kỹ tự!',
            'product_price.required'=>'Giá sản phẩm không đúng định dạng!',
            'product_price.numeric'=>'Giá sản phẩm không để trống!',
            'product_img.image'=>'File ảnh không đúng định dạng',
        ];
    }
}



