<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            //'user_id' => 'required',
            'categories.*' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'status' => 'required',
            'image' => 'required|file|max:1000|image'
        ];
    }
}
