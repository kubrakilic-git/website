<?php

namespace Ayza\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd('we are loading our package service provider.');
    }

    public function register()
    {

    }
}
