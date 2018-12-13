<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequestAsk extends FormRequest
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
            'askername' => 'nullable|min:3|max:100',
            'email' => 'required|email',
            'question' => 'required|min:20|max:400',
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
            'askername.min' => 'Минимальная длина имени 3 символа',
            'askername.max' => 'Максимальная длина имени 100 символов',
            'email.required' => 'E-mail обязателен для вопроса',
            'email.email' => 'E-mail не валидный',
            'question.required' => 'Вопрос обязателен',
            'question.min' => 'Минимальная длина вопроса 20 символов',
            'question.max' => 'Максимальная длина вопроса 400 символов',
        ];
    }
}
