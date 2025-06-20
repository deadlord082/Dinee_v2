<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $paths = [
            '/tmp/framework/sessions',
            '/tmp/framework/cache',
            '/tmp/storage/bootstrap/cache',
            '/tmp/storage/framework/cache',
            config('view.compiled'),
        ];

        foreach ($paths as $path) {
            if (! is_dir($path)) {
                mkdir($path, 0755, true);
            }
        } 
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
