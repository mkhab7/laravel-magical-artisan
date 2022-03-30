<?php

namespace Mkhab7\MagicalArtisan;

use Illuminate\Support\ServiceProvider;
use Mkhab7\MagicalArtisan\Console\Commands\MagicalMakeModelCommand;

class MagicalArtisanServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->runningInConsole() &&
        $this->commands([
            MagicalMakeModelCommand::class,

        ]);
    }
}