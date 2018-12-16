<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'    => 'required|email|unique:users',
            'login'    => 'required|min:5|max:50|unique:users',
            'password' => 'required|min:7',
            'role_id'  => 'required|exists:roles,id',
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
            'email.required'    => 'Email не может быть пустым',
            'email.email'       => 'Введите корректный email',
            'email.unique'      => 'Пользователь с таким email уже существует',
            'login.required'    => 'Логин не может быть пустым',
            'login.min'         => 'Минимальная длина логина 5 символов',
            'login.max'         => 'Максимальная длина логина 50 символов',
            'login.unique'      => 'Пользователь с таким логином уже существует',
            'password.required' => 'Пароль не может быть пустым',
            'password.min'      => 'Минимальная длина пароля 7 символов',
            'role_id.exists'    => 'Данной роли не существует',
            'role_id.required'  => 'Поле с ролью не может быть пустым',
        ];
    }
}
