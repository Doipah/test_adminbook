<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'book_name'=>'required|min:5 ',
            'price_book'=>'required',
            'category_book'=>'required',
            'category_file'=>'required',
            'year_print'=>'required',
            'user_write'=>'required',
            'image'=>' required|image|max:2048',
            'description'=>'required'
        ];
    }
}
