<?php

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Silber\Bouncer\BouncerFacade as Bouncer;

class AuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerPolicies();

        Bouncer::allow('admin')->to('admin');
        Bouncer::allow('director')->to('director');
        Bouncer::allow('professor')->to('professor');
        Bouncer::allow('student')->to('student');
    }
}
