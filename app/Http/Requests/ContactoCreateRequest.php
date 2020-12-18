<?php

namespace App\Http\Requests;

use App\Rules\GoogleReCaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactoCreateRequest extends FormRequest
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
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|confirmed',
            'asunto' => 'required',
            'tel' => 'required|max:10',
            'mensaje' => 'required|min:20|max:255',
            'g-recaptcha-response' => ['required', new GoogleReCaptchaRule]
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Su nombre es requerido',
            'apellido.required' => 'Su apellido es requerido',
            'email.required' => 'Su email es requerido',
            'email.email' => 'Ingrese un email valido',
            'email.confirmed' => 'No se pudo confirmar el email',
            'asunto.required' => 'El asunto es requerido',
            'tel.required' => 'El teléfono es requerido',
            'mensaje.required' => '',
            'mensaje.min' => 'El minimo para escribir es :min',
            'mensaje.max' => 'El maximo para escribir es :max',
            'g-recaptcha-response.required' => 'Verifica que eres humano'
        ];
    }
}
