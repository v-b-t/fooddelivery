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
            'name'=>'required|min:1|max:30',
            'email'=>'required|email',
            'subject'=>'required|min:4|max:50',
            'message'=>'required|min:10|max:500'
        ];
    }
    // public function attributes()
    // {
    //     return [
    //         'name'=>'ім"я'
    //     ];
    // }

    public function messages()
    {
        return [
            'name.required'=>'Поле ім*я обов*язкове',
            'email.required'=>'Поле email обов*язкове',
            'subject.required'=>'Поле тема обов*язкове',
            'message.required'=>'Поле повідомлення обов*язкове'
        ];
    }
}
