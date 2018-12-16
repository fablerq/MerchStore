<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMethodRequest extends FormRequest
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
            'title' => 'required|min:3|max:50|unique:payment_methods',
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
            'title.required' => 'Заглавие метода оплаты не может быть пустым',
            'title.min'      => 'Минимальная длина заглавия 3 символов',
            'title.max'      => 'Максимальная длина заглавия 50 символов',
            'title.unique'   => 'Метод оплаты с таким заглавием уже существует',
        ];
    }
}
