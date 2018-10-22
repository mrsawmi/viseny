<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'userFullName' => 'required',
            'userEmail' => 'required|email',
            'userPassword' => 'required',
            'userRole' => 'default(0)'
        ];
    }

    public function messages()
    {
        return [
            'userFullName.required' => 'وارد کردن نام کامل الزامی می باشد.',
            'userEmail.required' => 'وارد کردن ایمیل الزامی می باشد',
            'userEmail.email' => 'ایمیل وارد شده معتبر نمی باشد.',
            'userPassword.required' => 'وارد کردن کلمه عبور الزامی می باشد.',
        ];
    }
}
