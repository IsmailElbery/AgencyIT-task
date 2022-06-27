<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestEdit extends FormRequest
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
            'name' => 'required',
            'email' =>  'required|email',
            'status' =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '  الاسم مطلوب ',
            'email.required' => '  البريد الإلكتروني مطلوب ',
            'email.email' => '  يجب كتابة بريد إلكتروني صحيح  ',
            'status.required' => '   المرتبة الوظيفية  مطلوبة ',

        ];
    }
}
