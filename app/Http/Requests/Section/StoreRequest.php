<?php

namespace App\Http\Requests\Section;

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
            'section_name'=>'required|unique:sections,section_name',
            'description'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'section_name.required'=>'اسم القسم مطلوب',
            'section_name.unique'=>'هذا القسم مسجل مسبقا',
            'description.required'=>'الوصف مطلوب',
        ];
    }
}
