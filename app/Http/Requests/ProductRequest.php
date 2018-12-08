<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required|min:5|max:200|unique:products',
            'description' => 'required|min:5|max:1000',
            'price' => 'required|numeric',
            'faculty_id' => 'required|exists:faculties,id',
            'type_id' => 'required|exists:types,id'
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
            'title.required' => 'Название товара не может быть пустым',
            'title.min' => 'Минимальная длина названия товара 5 символов',
            'title.max' => 'Максимальная длина названия товара 200 символов',
            'title.unique' => 'Товар с таким названием уже существует',
            'description.required' => 'Описание товара не может быть пустым',
            'description.min' => 'Минимальная длина описания товара 5 символов',
            'description.max' => 'Максимальная длина описания товара 1000 символов',
            'faculty_id.exists' => 'Данного факультета не существует',
            'faculty_id.required' => 'Поле с факультетом обязательно',
            'type_id.exists' => 'Данного типа товара не существует',
            'type_id.required' => 'Поле с типом товара обязательно',
        ];
    }
}
