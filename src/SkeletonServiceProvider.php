<?php

declare(strict_types=1);

namespace Werxe\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        // $this->mergeConfigFrom(
        //     realpath(__DIR__.'/../config/config.php'), 'werxe.skeleton.config'
        // );

        $this->registerSkeleton();
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // // Publish config
            // $this->publishes([
            //     realpath(__DIR__.'/../config/config.php') => config_path('werxe/skeleton/config.php'),
            // ], 'werxe:skeleton.config');

            // // Publish migrations
            // $this->publishes([
            //     realpath(__DIR__.'/../database/migrations') => database_path('migrations'),
            // ], 'werxe:skeleton.migrations');

            // // Load migrations
            // $this->loadMigrationsFrom(
            //     realpath(__DIR__.'/../database/migrations')
            // );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [];
    }
}
