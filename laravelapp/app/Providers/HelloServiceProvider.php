<?php

namespace App\Providers;

use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages){
            return new HelloValidator($translator, $data , $rules, $messages);
        });
    }
}
