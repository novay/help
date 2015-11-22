<?php

namespace App\Providers\Contracts\UploadHelper;

use Illuminate\Support\ServiceProvider;
use App;
class UploadHelperServiceProvide extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('UploadHelper',function ()
        {
            return new App\Providers\Contracts\UploadHelper\UploadHelper;
        });

        // App::alias('UploadHelper',\Providers\UploadHelper::class);
    }
    public function providers()
    {
        return ['App\Providers\Contracts\UploadHelper\UploadHelper'];
    }
}
