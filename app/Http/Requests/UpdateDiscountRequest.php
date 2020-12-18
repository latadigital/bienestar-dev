<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscountRequest extends FormRequest
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
            'name' => 'required',
            'presentation' => 'required',
            'make_id' => 'required',
            'code' => 'required',
            'discount' => 'required',
            'file1' => 'max:1000|image',
            'file2' => 'max:1000|image',
            'file3' => 'max:1000|image',
            'from_date' => 'required',
            'to_date' => 'required',
            'state' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'presentation.required' => 'La presetación es requerida',
            'make_id.required' => 'La marca es requerida',
            'code.required' => 'El código es requerido',
            'discount.required' => 'El desuento es requerido',
            'from_date.required' => 'La fecha desde es requerida',
            'to_date.required' => 'La fecha hasta es requerida',
            'state.required' => 'El estado es requerido',

            'file1.image' => 'El código 1 debe ser una imagen',
            'file1.max' => 'El peso de código 1 debe ser :max',

            'file2.image' => 'El código 2 debe ser una imagen',
            'file2.max' => 'El peso de código 2 debe ser :max',

            'file3.image' => 'El código 3 debe ser una imagen',
            'file3.max' => 'El peso de código 3 debe ser :max',
        ];
    }
}
