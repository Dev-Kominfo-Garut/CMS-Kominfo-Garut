<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        Voyager::useModel('PageComponent', \App\PageComponent::class);
        Voyager::useModel('Page', \App\Page::class);
        Voyager::useModel('ComponentItem', \App\ComponentItem::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
