<?php

use Mkhab7\MagicalArtisan\Console\Commands\MagicalMakeModelCommand;

test('example', function () {
/** @var \Mkhab7\MagicalArtisan\Tests\TestCase $this */
    $this->artisan(
        MagicalMakeModelCommand::class,['name'=>'User Model -a -m']
    )->assertSuccessful()
        ->expectsOutput('created');
});

