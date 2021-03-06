<?php

namespace MichelCalisto\Site;

use Illuminate\Support\ServiceProvider as Provider;

final class SiteServiceProvider extends Provider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configurePublishing();
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        // $this->publishes([
        //     __DIR__.'/../config/site.php' => config_path('site.php'),
        // ], 'site-config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/'),
        ], 'site-views');

        $this->publishes([
            __DIR__.'/../database/migrations/2022_01_20_000000_create_sites_table.php' => database_path('migrations/2022_01_20_000000_create_sites_table.php'),
            __DIR__.'/../database/migrations/2022_01_20_100000_create_sliders_table.php' => database_path('migrations/2022_01_20_100000_create_sliders_table.php'),
            __DIR__.'/../database/migrations/2022_01_20_200000_create_publications_table.php' => database_path('migrations/2022_01_20_200000_create_publications_table.php'),
        ], 'site-migrations');

        $this->publishes([
            __DIR__.'/../routes/site.php' => base_path('routes/site.php'),
        ], 'site-routes');
    }
}