<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'nullable|file',
            'main_image'=>'nullable|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_id.*'=>'nuallable|integer|exists:tags,id'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Это поле необходимо для заполнения',
            'title.string'=>'Данные должны соответствовать строчному типу',
            'content.required'=>'Это поле необходимо для заполнения',
            'content.string'=>'Данные должны соответствовать строчному типу',
            'preview_image.required'=>'Это поле необходимо для заполнения',
            'preview_image.file'=>'Необходимо отправить файл',
            'main_image.required'=>'Это поле необходимо для заполнения',
            'main_image.file'=>'Необходимо отправить файл',
            'category_id.required'=>'Это поле необходимо для заполнения',
            'category_id.integer'=>'Это поле должно быть числом',
            'category_id.exists'=>'Id категории должно быть в базе данных',
            'tag_ids.array'=>'Необходимо отправить массив',


        ];
    }
}
