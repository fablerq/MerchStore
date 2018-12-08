<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'title' => 'required|min:5',
            'photo_link' => 'required|min:5|unique:photos',
            'product_id' => 'required|exists:products,id'
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
            'title.required' => 'Заглавие фотографии не может быть пустым',
            'title.min' => 'Минимальная длина названия фотографии 5 символов',
            'photo_link.required'  => 'Ссылка на фотографию не может быть пустой',
            'photo_link.unique' => 'Ссылка на фотографию должна быть уникальной',
            'photo_link.min' => 'Минимальная длина ссылки 5 символов',
            'product_id.exists' => 'Такого товара не существует',
            'product_id.required' => 'Поле с товаром обязательно',
        ];
    }
}
