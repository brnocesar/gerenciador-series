<?php

namespace App\Http\Requests\Account;

use App\Rules\Account\CheckOldPassword;
use App\Rules\Account\LoggedEMail;
use App\Rules\Account\LoggedName;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordAccountRequest extends FormRequest
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
            'name'              => ['required', 'max:20', new LoggedName],
            'email'             => ['required', new LoggedEMail],
            'old_password'      => ['required', new CheckOldPassword],
            'new_password'      => 'required|min:6|different:old_password',
            'confirm_password'  => 'required|same:new_password'
        ];
    }


    public function messages()
    {
        return [
            'required'          => trans('messages.missing_fields'),
            'name.max'          => trans('messages.max_char') . '(:attribute, :max)',
            'different'         => 'senha deve ser diferente',
            'new_password.min'  => trans('messages.min_password_length') . ':min caracteres.',
            'same'              => trans('messages.confirm_password'),
        ];
    }
}
