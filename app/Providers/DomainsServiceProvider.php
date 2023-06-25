<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class DomainsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $domain = Str::afterLast($modelName, '\\');

            return "\\App\\Domain\\{$domain}\\Factories\\" . $domain . 'Factory';
        });
    }
}
