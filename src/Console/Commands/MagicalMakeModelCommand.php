<?php

namespace Mkhab7\MagicalArtisan\Console\Commands;

use Illuminate\Console\Command;

class MagicalMakeModelCommand extends Command
{

    protected $name = 'magical:make-model';

    protected $description = 'Generate your multiple models';

    public function handle()
    {

        $args = \str($this->argument('name'))->split('~\s+~');
        $opts = $args->filter([$this, 'filterOptions']);

        $this->alert('Creating...');

        $this->withProgressBar($args->diff($opts), function ($name) use ($opts) {

            $this->call('make:model', $opts->merge(['name' => $name])->toArray());

            $this->performTask($name);

        });

        $this->alert('Successfully created !');
    }

    public function filterOptions($arg): bool
    {
        return str_starts_with($arg, '-');
    }

}