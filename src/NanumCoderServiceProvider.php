<?php

namespace NanumCoder\Blog;

use Illuminate\Support\ServiceProvider;

class NanumCoderServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        
    }
}
