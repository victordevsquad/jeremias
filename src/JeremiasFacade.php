<?php

namespace Elitedevsquad\Jeremias;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elitedevsquad\Jeremias\Skeleton\SkeletonClass
 */
class JeremiasFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jeremias';
    }
}
