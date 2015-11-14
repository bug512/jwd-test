<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddJobRequest extends Request
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
            //
            'company_name' => 'required',
            'job_name' => 'required',
            'company_email' => 'required|email',
            'job_description' => 'required',
        ];
    }
}
