<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title'=>'required|min:1|max:30',
            'content'=>'required|max:256',

        ];
    }


    public function messages()
    {
        return [
            'title.required'=>'Поле ім*я обов*язкове',
            'title.min'=>'Поле name має містити хоча б 1 символ',
            'tile.max'=>'Поле name має не більше 30 символів',
            
        ];
    }
}
