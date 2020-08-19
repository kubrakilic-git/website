<?php

namespace Ayza\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        info('ayza/website bootstraped.');
    }

    public function register()
    {

    }
}
