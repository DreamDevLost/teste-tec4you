<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'brand.required' => 'Você deve selecionar uma marca.',
            'model.required' => 'Você deve selecionar um modelo.',
            'part.required' => 'Você deve selecionar uma peça.',
            'message.required' => 'Você deve escrever uma mensagem.'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => ['required'],
            'model' => ['required'],
            'part' => ['required'],
            'message' => ['required'],
        ];
    }
}
