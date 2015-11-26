<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Contracts\Form\FormBuilder;

class FormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFormBuilder();
        $this->app->alias('form', 'App\Providers\Contracts\Form\FormBuilder');
    }
    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());
            return $form->setSessionStore($app['session.store']);
        });
    }
    public function provides()
    {
        return ['form'];
    }
}
