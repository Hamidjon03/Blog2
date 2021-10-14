<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required',
            'main_image' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Bu joyga title yozilishi kerak',
            'title.string' => 'Bu joyga satr yozilishi kerak',
            'content.required' => 'Bu joyga content yozilishi kerak',
            'content.string' => 'Bu joyga satr yozilishi kerak',
            'preview_image.required' => 'Bu joyga rasm yuklanishi kerak',
//            'preview_image.file' => 'Bu joyga fayl yuklanishi kerak',
            'main_image.required' => 'Bu joyga tasm yuklanishi kerak',
//            'main_image.file' => 'Bu joyga file yuklanishi kerak',
            'category_id.required' => 'Bu joy to\'ldirilishi shart',
            'category_id.exists' => 'Bu joy to\'ldirilishi shart',
            'tag_ids.nullable' => 'Massiv yuborilishi shart',
        ];
    }
}
