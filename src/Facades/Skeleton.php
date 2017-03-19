<?php

/*
 * This file is part of the Skeleton Laravel package.
 *
 * (c) Werxe <hello@werxe.com>
 *
 * For the full copyright and license information, please refer to
 * the LICENSE file that was distributed with this source code.
 */

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
