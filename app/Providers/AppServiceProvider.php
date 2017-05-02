<?php

namespace App\Providers;

use App\Matriuska;
use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cache to view @cache
        Blade::directive('cache', function ($expression) {
            return "<?php if ( ! App\Matriuska::setUP($expression)) { ?>";
            // return Matriuska::setUP($expression);
        });

        Blade::directive('endcache', function () {
            return "<?php } echo App\Matriuska::tearDown() { ?>";
            // return Matriuska::tearDown($expression);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
