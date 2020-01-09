<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'is_active'=>'required',
            'role_id'=>'required',
            'password'=>'required'
            //
        ];
    }
    public function messages()
    {
     return [
         'name.required'=>'الرجاء إدخال الاسم كاملاً',
         'email.required'=>'الرجاء إدخال البريد الالكتروني جيداً',
         'is_active.required'=>'الرجاء إدخال الحقل',
         'role_id.required'=>'الرجاء إدخال الحقل',
         'password.required'=>'الرجاء إدخال كلمة المرور جيداً',
     ];
    }
}
