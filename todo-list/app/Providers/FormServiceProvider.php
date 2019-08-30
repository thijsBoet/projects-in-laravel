<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'component.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextArea', 'component.form.textarea', ['name', 'value' => null, 'attributes' => []]);
    }
}
