<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'product_name'=>'required',
            'section_id'=>'required',
            'description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'product_name.required'=>'اسم المنتج مطلوب',
            'section_id.required'=>'اختار القسم',
            'description.required'=>'الوصف مطلوب',
        ];
    }
}
