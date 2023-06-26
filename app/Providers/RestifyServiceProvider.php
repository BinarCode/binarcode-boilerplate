<?php

namespace App\Providers;

use Binaryk\LaravelRestify\RestifyApplicationServiceProvider;
use Illuminate\Support\Facades\Gate;

final class RestifyServiceProvider extends RestifyApplicationServiceProvider
{
    protected function gate(): void
    {
        Gate::define('viewRestify', function ($user) {
            return true;
        });
    }
}
