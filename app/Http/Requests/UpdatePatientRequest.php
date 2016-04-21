<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UpdatePatientRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
	return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
	    'email' => 'required|email',
	    'phone' => 'required|phone',
	    'gender' => 'required',
	    'birthdate'    => 'required|date|before:tomorrow'
        ];
    }
}
