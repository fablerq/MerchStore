<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
            'title' => 'required|min:3|max:100|unique:colors',
            'code'  => 'required|min:3|max:100',
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
            'title.required' => 'Заглавие цвета не может быть пустым',
            'title.min'      => 'Минимальная длина заглавия 3 символов',
            'title.max'      => 'Максимальная длина заглавия 100 символов',
            'title.unique'   => 'Цвет с таким заглавием уже существует',
            'code.required'  => 'Код цвета не может быть пустым',
            'code.min'       => 'Минимальная длина кода цвета 3 символов',
            'code.max'       => 'Максимальная длина кода цвета 100 символов',
        ];
    }
}
