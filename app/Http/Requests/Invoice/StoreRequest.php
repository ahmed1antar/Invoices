<?php

namespace App\Http\Requests\Invoice;

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
            'invoice_number'=>'required',
            'invoice_Date'=>'required',
            'Due_date'=>'required',
            'Section'=>'required',
            'product'=>'required',
            'Amount_collection'=>'required',
            'Amount_Commission'=>'required',
            'Rate_VAT'=>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'invoice_number.required'=>'يجب ادخال رقم الفاتوره',
            'invoice_Date.required'=>'يجب ادخال تاريخ الفاتوره',
            'Due_date.required'=>'يجب ادخال تاريخ الاستحقاق',
            'Section.required'=>'يجب ادخال القسم',
            'product.required'=>'يجب ادخال المنتج',
            'Amount_collection.required'=>'يجب ادخال مبلغ التحصيل',
            'Amount_Commission.required'=>'يجب ادخال مبلغ العموله',
            'Rate_VAT.required'=>'اختار نسبه الضريبه المضافه',
            
            
        ];
    }
}
