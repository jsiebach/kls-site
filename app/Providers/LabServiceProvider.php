<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LabServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	if(app('request')->server('HTTP_HOST') === config('app.lab_app_domain')) {
    		config([
    			'app.is_lab' => true,
		    ]);
	    }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
