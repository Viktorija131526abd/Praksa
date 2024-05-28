<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Silber\Bouncer\BouncerFacade as Bouncer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Bouncer::allow('admin')->to(['edit-users', 'delete-users']);
        Bouncer::allow('headmaster')->to(['edit-users', 'delete-users']);
    }
}
