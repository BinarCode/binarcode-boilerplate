<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->setupFactory();
    }

    /**
     * Instruct factory to get the class from the `Database/Factories folder, not domains one.
     */
    public function setupFactory(): void
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $databaseNamespace = 'Database\\Factories\\';

            return $databaseNamespace.class_basename($modelName).'Factory';
        });
    }
}
