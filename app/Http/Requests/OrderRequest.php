<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'status_id' => 'required|exists:statuses,id',
            'paymentmethod_id' => 'required|exists:payment_methods,id'
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
            'user_id.exists' => 'Данного пользователя не существует',
            'user_id.required' => 'Поле с выбором пользователя не может быть пустым',
            'status_id.exists' => 'Данного статуса товара не существует',
            'status_id.required' => 'Поле с выбором статуса товара не может быть пустым',
            'paymentmethod_id.exists' => 'Данного метода оплаты не существует',
            'paymentmethod_id.required' => 'Поле с выбором метода оплаты обязательно',
        ];
    }
}
