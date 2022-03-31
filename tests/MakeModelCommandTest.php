<?php

use Mkhab7\MagicalArtisan\Console\Commands\MagicalModelMakeCommand;

test('example', function () {
/** @var \Mkhab7\MagicalArtisan\Tests\TestCase $this */
    $this->artisan(
        MagicalModelMakeCommand::class,['name'=>'User Model -a -m']
    )->assertSuccessful()
        ->expectsOutput('created');
});

