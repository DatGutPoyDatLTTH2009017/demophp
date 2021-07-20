<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'startDate'=>['required','after:today'],
            'endDate' => ['required','after:starDate'],
            'eventName' => ['required','min:20'],
            'bandNames' => ['required'],
            'ticketPrice' => ['required','min:1'],
            'status' => ['required','min:0','max:3'],
            'portfolio' => ['required'],
        ];
    }
    public function messages()
    {
        return[
            'startDate.required'=>'Vui lòng nhập ngày bắt đầu sự kiện',
            'startDate.after'=>'ngày bắt đầu phải sau ngày hiện tại',
            'endDate.required'=>'Vui lòng nhập ngày kết thức sự kiện',
            'endDate.after'=>'ngày kêt thúc phải sau ngày bắt đầu',
            'eventName.required'=>'Vui lòng nhập tên sự kiện',
            'eventName.min'=>'Tên sự kiện tối thiểu 20 ký tự',
            'bandNames.required'=>'Vui lòng nhập tên ban nhạc',
            'ticketPrice.required'=>'Vui lòng nhập giá vé',
            'ticketPrice.min'=>'Vui lòng nhập giá vé tối thiểu 1$',
            'status.required'=>'Vui lòng nhập trạng thái cho sự kiện',
            'status.min'=>'Trạng thái tối thiểu là 0',
            'status.max'=>'Trạng thái tối thiểu là 3',
            'portfolio.required'=>'Vui lòng nhập danh mục đầu tư',
        ];
    }
}
