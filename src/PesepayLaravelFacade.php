<?php

namespace Alimwa\PesepayLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alimwa\PesepayLaravel\Skeleton\SkeletonClass
 */
class PesepayLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pesepay-laravel';
    }
}
