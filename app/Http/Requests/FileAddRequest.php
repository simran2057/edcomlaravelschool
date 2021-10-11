<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileAddRequest extends FormRequest
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
            'title' => 'required | max:255',
            'file_link'  => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,docx,pptx,txt,ppt,odt,xls,xlsx|max:20000',
        ];
    }
      public function attributes()
    {
        return [
            'title' => 'Title',
            'file_link' => 'File'
        ];
    }
}

