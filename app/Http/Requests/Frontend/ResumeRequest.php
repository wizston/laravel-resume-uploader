<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

class ResumeRequest extends Request
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
            'name'             => 'required',
            'phone'            => 'required',
            'address'          => 'required',
            'gender'           => 'required',
            'state'            => 'required',
            'local_government' => 'required',
            'date_of_birth'    => 'required',
            'file'             => 'required|max:3000|mimes:doc,pdf',
        ];
    }
}
