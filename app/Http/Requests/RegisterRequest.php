<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email'    => 'required|email|unique:users,email',
            'login'    => 'required|min:5|max:50|unique:users,login',
            'password' => 'required|min:7',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required'    => 'E-mail обязателен',
            'email.email'       => 'Некорректный e-mail',
            'email.unique'      => 'Пользователь с таким email уже существует',
            'login.required'    => 'Логин обязателен',
            'login.min'         => 'Минимальная длина логина 5 символов',
            'login.max'         => 'Минимальная длина логина 50 символов',
            'login.unique'      => 'Логин занят',
            'password.required' => 'Пароль обязателен',
            'password.min'      => 'Минимальная длина пароля 7 символов',
        ];
    }
}
