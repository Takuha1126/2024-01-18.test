<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'first_tell' => 'required|max:5',
            'middle_tell' => 'required|max:5',
            'last_tell' => 'required|max:5',
            'address' => 'required',
            'detail' => 'required|max:120'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスをメール形式で入力してください',
            'first_tell.required' => '電話番号を入力してください',
            'first_tell.max:5' => '電話番号は5桁までの数字で入力してください',
            'middle_tell.required' => '電話番号を入力してください',
            'middle_tell.max:5' => '電話番号は5桁までの数字で入力してください',
            'last_tell.required' => '電話番号を入力してください',
            'last_tell.max:5' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max:120' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
