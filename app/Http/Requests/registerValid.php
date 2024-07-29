<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerValid extends FormRequest
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
            'name' => ['required', 'min:2', 'max:30'],
            'email' => 'required|email|ends_with:@gmail.com',
            'mk1' => 'required|min:6|same:mk2',
            'mk2' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên đăng nhập không được để trống',
            'name.min' => 'Tên đăng nhập ít nhất 2 ký tự',
            'name.max' => 'Tên đăng nhập không quá 30 ký tự',
            'email.required' => 'Chưa nhập email',
            'email.email' => 'Nhập email chưa đúng',
            'email.ends_with' => 'Email phải có đuôi là gmail.com',
            'mk1.required' => 'Bạn chưa nhập mật khẩu',
            'mk1.min' => 'Mật khẩu từ 6 ký tự trở lên',
            'mk1.same' => 'Mật khẩu nhập lại không khớp',
            'mk2.required' => 'Bạn chưa nhập mật khẩu nhập lại',
            'mk2.min' => 'Mật khẩu nhập lại cùng từ 6 ký tự trở lên'
        ];
    }
}
