<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-view';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $viewPath = resource_path('views/'.$name.'.balde.php');
        if(File::exists($viewPath)){
            $this->error('View Already Exists!');
        }
        else{
            File::put($viewPath, '');
            $this->info('View is Created Successfully');
        }
    }
}
