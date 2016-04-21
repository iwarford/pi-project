<?php 

namespace App\Services\Validation;

use Surgeon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;



class UtilityValidations extends Validator
{
    /**
     * Check if the string resembles a phone number.
     *
     * Phone number regex from 
     * http://stackoverflow.com/questions/16699007/regular-expression-to-match-standard-10-digit-phone-number
     *
     * Example of usage:
     * 'phone_field' => 'phone'
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return mixed
     */ 
    public function validatePhone($attribute, $value, $parameters)
    {
	return preg_match('/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
			  $value); 
    }

    /**
     * Check if the Surgeon doesn't have any patients.
     *
     * Example of usage:
     * 'id' => 'no_patients'
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return mixed
     */ 
    public function validateNoPatients($attribute, $value, $parameters) 
    {
	$surgeon = Surgeon::findOrFail($value);
	return $surgeon->patients()->isEmpty();
    }

}
