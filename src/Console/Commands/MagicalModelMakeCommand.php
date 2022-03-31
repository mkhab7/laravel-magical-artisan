<?php

namespace Mkhab7\MagicalArtisan\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;
use Symfony\Component\Console\Input\InputArgument;


class MagicalModelMakeCommand extends ModelMakeCommand
{

    protected $name = 'magical:make-model';

    protected $description = 'Generate your multiple models';


    public function handle()
    {
        $this->info('Start creating...');
        $this->newLine();

        foreach ($this->argument('names') as $name) {
            $this->comment("Creating {$name} model...");
            $this->call(
                'make:model',
                collect($this->options())
                    ->keyBy(fn($value, $key) => '--' . $key)
                    ->put('name', $name)
                    ->toArray()
            );
        }
        $this->newLine(2);
        $this->alert('Finish');
    }

    protected function getArguments()
    {
        return [
            ['names', InputArgument::IS_ARRAY, 'The name of the classes']
        ];

    }
}
