<?php

namespace MarvinRabe\LaravelSettings\Tests;

use MarvinRabe\LaravelSettings\Providers\ServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

}
