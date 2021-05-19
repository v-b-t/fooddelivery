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


    public function messages()
    {
        return [
            'name.required'=>'Поле ім*я обов*язкове',
            'name.min'=>'Поле name має містити хоча б 1 символ',
            'name.max'=>'Поле name має не більше 30 символів',
            'email.required'=>'Поле email обов*язкове',
            'subject.required'=>'Поле тема обов*язкове',
            'subject.min'=>'Поле тема має містити хоча б 4 символи',
            'subject.max'=>'Поле тема має містити не більше 50 символів',
            'message.required'=>'Поле повідомлення обов*язкове',
            'message.min'=>'Поле повідомлення має містити хоча б 10 символів',
            'message.max'=>'Поле  повідомлення має не більше 500 символів',
        ];
    }
}
