<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; //Obbligatorio per usare rule


class UpdateTagRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('types')->ignore($this->type), 'max:50'],
            
    ];
    }
    public function messages(){
        return[
            'name.required' => 'Il titolo è obbligatorio',
            'name.unique' => 'Il tag con questo titolo è già presente nella pagina',
            'name.max' => 'Il titolo può essere lungo al massimo :max caratteri.',

        ];
    }
}
