<?php

namespace Muthuram\ObsValidation\Tests;

use Orchestra\Testbench\TestCase;
use Muthuram\ObsValidation\ObsValidationServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ObsValidationServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
