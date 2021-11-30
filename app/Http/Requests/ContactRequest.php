<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ZipCodeRule;

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
            'fullname' => 'required',
            // 'lastname' => 'required',
            // 'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postal_code' => ['required', new ZipCodeRule],
            'address' => 'required',
            'option' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => '名前を入力して下さい。',
            // 'lastname.required' => '名前を入力して下さい。',
            // 'firstname.required' => '名前を入力して下さい。',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postal_code.required' => '郵便番号を入力して下さい。',
            'postal_code.digits' => '数字7桁で入力して下さい。',
            'address.required' => '住所を入力して下さい。',
            'option.required' => 'ご意見を120字以内で入力して下さい。',
            'option.max' => '120字以内で入力して下さい。',
        ];
    }
}
