<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:types,id',
            'body' => 'required|min:20|max:3000'
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
            'body.required' => 'Комментарий не может быть пустым',
            'body.min' => 'Минимальная длина комментария 20 символов',
            'body.max' => 'Максимальная длина комментария 3000 символов',
            'product_id.exists' => 'Данный товар не существует. Комментарий невозможен',
            'product_id.required' => 'Поле с выбором товара для комментария не должно быть пустым',
            'user_id.exists' => 'Данный пользователь не существует. Комментарий невозможно добавить',
            'user_id.required' => 'У комментария должен быть пользователь',
        ];
    }
}
