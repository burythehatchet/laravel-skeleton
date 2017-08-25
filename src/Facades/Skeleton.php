<?php

namespace Werxe\Skeleton\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Skeleton extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
