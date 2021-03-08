<?php

namespace Kabirkhyrul\Laj\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LajCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laj:auth';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold the api authentication controller';

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
     * @return mixed
     */
    public function handle()
    {
        // Code for creating folder for api controller
        $this->makeDir();

        // get path of auth controller

        $authController = app_path('Http/Controllers/Api/AuthController.php');

        // code for ask user is he want to replace current controller
        if (file_exists($authController)) if (!$this->confirm("The AuthController already exists. Do you want to replace it?")) return;

        // code for copy file from stub to api directory we created before
        $stub_path = sprintf(
            "%s/../../../stubs",

            __DIR__
        );

        copy(
            "{$stub_path}/Api/AuthController.stub",

            $authController
        );

        // code for prompt user namespace of his model directory
        $namespace = $this->ask('Namespace of your model [default = App\Models] ?');

        if (!$namespace) {

            //  code for current user model path
            $userModel = app_path('Models/User.php');

            //  code for ask user if he want to replace his current user model, it is also a check for naughty tester ;)
            if (file_exists($userModel)) if (!$this->confirm("I will replace your User model. Do you want to proceed ?")) return;

            //  code for copy file from stub to default model namespace
            copy(
                $stub_path . '/Models/User.stub',

                app_path('Models/User.php')
            );
        } else {

            $userModel = app_path('User.php');

            //  code for ask user if he want to replace his current user model, it is also a check for naughty tester ;)
            if (file_exists($userModel)) if (!$this->confirm("I will replace your User model. Do you want to proceed ?")) return;

            //  code for copy file from stub to default model namespace
            copy(
                $stub_path . '/User.stub',

                app_path('User.php')
            );
        }
        Artisan::call('jwt:secret');

        $this->info('Authentication scaffolding generated successfully.');
    }

    public function makeDir(): void
    {
        if (!is_dir($directory = app_path('Http/Controllers/Api'))) mkdir($directory, 0755, true);
    }
}
