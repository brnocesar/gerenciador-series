<?php

namespace App\Http\Requests\Autenticacao;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutenticacaoRequest extends FormRequest
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
            'name'              => 'required|max:20',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|same:password'
        ];
    }


    public function messages()
    {
        return [
            'required'  => trans('messages.missing_fields'),
            'email'     => trans('messages.should_be_an_email'),
            'email.unique'    => trans('messages.email_unique'),
            'name.max'       => trans('messages.max_char') . '(:attribute, :max)',
            'password.min'       => trans('messages.min_password_length') . ':min caracteres.',
            'confirm_password.same' => trans('messages.confirm_password'),
        ];
    }
}
