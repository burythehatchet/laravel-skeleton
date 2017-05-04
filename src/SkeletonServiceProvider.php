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
            //     $this->getResourcePath('config/config.php') => config_path('werxe/skeleton/config.php'),
            // ], 'config');

            // Publish migrations
            // $this->publishes([
            //     $this->getResourcePath('migrations') => database_path('migrations'),
            // ], 'migrations');
        }
    }

    /**
    * {@inheritdoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            $this->getResourcePath('config/config.php'), 'werxe.skeleton.config'
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

    /**
     * Returns the full path to the given resource.
     *
     * @param  string  $resource
     * @return string
     */
    protected function getResourcePath($resource)
    {
        return realpath(__DIR__.'/../resources/'.$resource);
    }
}
