<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'categories.*' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'status' => 'required',
            'image' => 'max:1000|image'
        ];
    }

    public function messages()
    {
        return [
            'categories.*.required' => 'Las categorias son obligatorias',
            'name.required' => 'El nombre es obligatorio',
            'slug.required' => 'El slug es obligatorio',
            'excerpt.required' => 'El extracto es obligatorio',
            'body.required' => 'El body es obligatorio',
            'status.required' => 'El estatus es obligatorio',
            'image.required' => 'La imagen es obigatoria',
            'image.max' => 'La imagen debe ser del tipo imagen',
            'image.image' => 'El peso máximo de la imagen debe ser :max'
        ];
    }
}
