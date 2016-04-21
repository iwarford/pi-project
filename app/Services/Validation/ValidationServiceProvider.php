<?php 

namespace App\Services\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() 
    {
	//
    }


    /**
     * Boot the service provider.
     */
    public function boot()
    {
	//
	// This registers the service provider with Laravel (I hope)
	//
        $this->app->validator->resolver(function ($translator, $data, $rules, $messages) {

	    // Return our class with various Utility validations 
            return new UtilityValidations($translator, $data, $rules, $messages);
        });
    }
}
