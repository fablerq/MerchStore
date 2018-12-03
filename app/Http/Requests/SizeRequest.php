<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SizeRequest extends FormRequest
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
            'title' => 'required|max:50|unique:sizes',
            'description' => 'required|min:5|max:300',
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
            'title.required' => 'Заглавие размера не может быть пустым',
            'title.max' => 'Максимальная длина заглавия 50 символов',
            'title.unique' => 'Размер с таким заглавием уже существует',
            'description.required'  => 'Описание размера не может быть пустым',
            'description.min' => 'Минимальная длина описания размера 5 символов',
            'description.max' => 'Максимальная длина описания размера 300 символов',
        ];
    }
}
