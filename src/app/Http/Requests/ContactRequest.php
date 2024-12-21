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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //ルール設定
            'name' =>['required','string','max:255'],
            'email' =>['required','string','email','max:255'],
            'tel' =>['required','numeric','digits_between:10,11'],
        ];
    }
}
