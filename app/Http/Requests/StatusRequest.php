<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            'title' => 'required|min:5|max:50|unique:statuses',
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
            'title.required' => 'Заглавие статуса не может быть пустым',
            'title.min' => 'Минимальная длина заглавия 5 символов',
            'title.max' => 'Максимальная длина заглавия 50 символов',
            'title.unique' => 'Статус с таким заглавием уже существует',
            'description.required'  => 'Описание статуса не может быть пустым',
            'description.min' => 'Минимальная длина описания статуса 5 символов',
            'description.max' => 'Максимальная длина описания статуса 300 символов',
        ];
    }

    
    
}
