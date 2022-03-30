<?php

namespace Mkhab7\MagicalArtisan\Tests;


class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app): array
    {
        return [
            \Mkhab7\MagicalArtisan\MagicalArtisanServiceProvider::class
        ];
    }



}