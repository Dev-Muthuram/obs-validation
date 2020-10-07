<?php

namespace Muthuram\ObsValidation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Muthuram\ObsValidation\Skeleton\SkeletonClass
 */
class ObsValidationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'obs-validation';
    }
}
