<?php

namespace Mkhab7\MagicalArtisan\Tests\Fixtures;

use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;
use Illuminate\Foundation\Console\Kernel as BaseKernel;


class Artisan extends BaseKernel
{
    // This will override the parent's call() and block it from doing anything.
    public function call($command, array $parameters = [], $outputBuffer = null){

    }
}