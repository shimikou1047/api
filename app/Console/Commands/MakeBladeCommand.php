<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class MakeBladeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:blade {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new blade file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    	$stub = File::get(app_path(). '/Console/Commands/stubs/blade.stub');
    	$file = resource_path() . '/views/' . $this->argument('name') . '.blade.php';
	File::put($file, $stub);
	echo 'comprete!';
    }
}
