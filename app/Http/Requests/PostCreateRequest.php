<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title'=>'required',
            'content'=>'required',
            'category_id'=>'required',
            'photo_id'=>'required'
            //
        ];
    }
    public function messages(){
        return[
            'title.required'=>'الرجاءإدخال العنوان بشكل صحيح',
            'category_id.required'=>'الرجاءإختيار التصنيف',
            'photo_id.required'=>'الرجاءإدخال صورة',
            'content.required'=>'الرجاءإدخال المحتوى بشكل صحيح',

        ];
    }
}
