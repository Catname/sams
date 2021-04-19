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
            'name' => 'required|max:20|unique:students,name',
            'chinese' => 'required|numeric|between:0,150',
            'math' => 'required|numeric|between:0,150',
            'english' => 'required|numeric|between:0,150',
            'avatar' => 'mimes:png,jpg,gif,jpeg|dimensions:min_width=208,min_height=208',
        ];
    }

    public function messages()
    {
        return [
            'avatar.mimes' =>'头像必须是 png, jpg, gif, jpeg 格式的图片',
            'avatar.dimensions' => '图片的清晰度不够，宽和高需要 208px 以上',
            'name.unique' => '用户名已被占用，请重新填写',
            'chinese.between' => '分数必须为 0 - 150 之间。',
            'math.between' => '分数必须为 0 - 150 之间。',
            'english.between' => '分数必须为 0 - 150 之间。',
            'name.required' => '用户名不能为空。',
        ];
    }
}
