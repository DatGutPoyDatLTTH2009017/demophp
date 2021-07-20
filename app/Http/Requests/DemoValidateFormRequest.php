<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoValidateFormRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'description'=>'required|min:5|max:20',
            'price'=>'numeric'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Vui long nhap ten',
            'name.min' => 'ten phai it nhat 5 ki tu',
            'name.max' => 'ten nho hon 20 ki tu',
            'description.required' => 'Vui long nhap mo ta',
            'description.min' => 'mo ta phai it nhat 5 ki tu',
            'description.max' => 'mo ta nho hon 20 ki tu',
            'price.numeric' => 'Vui long nhap gia',
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('name')=='dat'){
                $validator->error()->add('name','khong the nhap voi ten dat');
            }
        });

    }
}
