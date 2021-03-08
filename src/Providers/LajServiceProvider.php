<?php

namespace Kabirkhyrul\Laj\Providers;

use Illuminate\Support\ServiceProvider;
use Kabirkhyrul\Laj\Console\Commands\LajCommand;

class LajServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Config
         *
         * Uncomment this function call to make the config file publishable using the 'config' tag.
         */
        config(['auth.guards.laj' => array_merge([
            'driver' => 'jwt',
            'provider' => 'users',
        ], config('auth.guards.laj', [])),
        ]);


        /**
         * Routes
         *
         * Uncomment this function call to load the route files.
         * A web.php file has already been generated.
         */
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');





        /**
         * Commands
         *
         * Uncomment this section to load the commands.
         * A basic command file has already been generated in 'src\Console\Commands\MyPackageCommand.php'.
         */
        if ($this->app->runningInConsole()) {
            $this->commands([
                LajCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
