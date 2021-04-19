<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|max:20',
            'chinese' => 'required|numeric|min:0|max:150',
            'math' => 'required|numeric|min:0|max:150',
            'english' => 'required|numeric|min:0|max:150',
        ];
    }
}
