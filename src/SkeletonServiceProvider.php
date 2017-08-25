<?php

/*
 * This file is part of the Skeleton Laravel package.
 *
 * (c) Werxe <hello@werxe.com>
 *
 * For the full copyright and license information, please refer to
 * the LICENSE file that was distributed with this source code.
 */

namespace Werxe\Skeleton\Laravel;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish config
            // $this->publishes([
            //     realpath(__DIR__.'/../config/config.php') => config_path('werxe/skeleton/config.php'),
            // ], 'werxe:skeleton.config');

            // Publish migrations
            // $this->publishes([
            //     realpath(__DIR__.'/../database/migrations') => database_path('migrations'),
            // ], 'werxe:skeleton.migrations');

            // Load migrations
            // $this->loadMigrationsFrom(
            //     realpath(__DIR__.'/../database/migrations')
            // );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            realpath(__DIR__.'/../config/config.php'), 'werxe.skeleton.config'
        );

        $this->registerSkeleton();
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [ 'skeleton' ];
    }

    /**
     * Registers Skeleton.
     *
     * @return void
     */
    protected function registerSkeleton()
    {
        $this->app->singleton('skeleton', function ($app) {
            return new Skeleton();
        });

        $this->app->alias('skeleton', 'Werxe\Skeleton\Laravel\Skeleton');
    }
}
