<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequestReply extends FormRequest
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
            'question_id' => 'required|exists:f_a_q_s,id',
            'user_id' => 'required|exists:users,id',
            'answer' => 'required|min:20|max:400',
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
            'user_id.exists' => 'Данный пользователь не существует. Ответить невозможно',
            'user_id.required' => 'Поле с пользователем для ответа на вопрос обязателен',
            'question_id.exists' => 'Данный пользователь не существует. Ответить невозможно',
            'question_id.required' => 'Данного вопроса не существует. Ответить невозможно',
            'answer.min' => 'Минимальная длина ответа 20 символа',
            'answer.max' => 'Максимальная длина овтета 400 символов',
            'answer.required' => 'Ответ обязателен',
        ];
    }
}
