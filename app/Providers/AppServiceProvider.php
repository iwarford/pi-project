<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;
use Validators\PhoneNumberValidator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	// Validator::extend('nopatients', 'DeleteSurgeonValidator@validate');
	// Validator::extend('phone', '\App\Validators\PhoneNumberValidator@validate');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
