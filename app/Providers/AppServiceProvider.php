<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        view()->share('contacts',
//            Contact::query()->first());

        view()->composer(
            ['layout.includes.footer','contacts.index'],
            function ($view) {
                $view->with('contact',
                    Contact::query()->first());
            }
        );
    }
}
