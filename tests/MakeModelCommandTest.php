<?php

use Mkhab7\MagicalArtisan\Console\Commands\MagicalModelMakeCommand;
use Mkhab7\MagicalArtisan\Tests\TestCase;

test('creating a few new model', function () {
    /** @var TestCase $this */
    $this->artisan(
        MagicalModelMakeCommand::class,
        ['names' => ['Model1', 'Model2', 'Model3']]
    )->assertSuccessful()
        ->expectsOutput('Creating Model1 model...')
        ->expectsOutput('Creating Model2 model...')
        ->expectsOutput('Creating Model3 model...');
});

