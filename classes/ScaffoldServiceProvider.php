<?php

namespace Jexme\Scaffold\Classes;

use Illuminate\Support\ServiceProvider;
use Jexme\Scaffold\Classes\Console\CreateController;
use Jexme\Scaffold\Classes\Console\CreateModel;
use Jexme\Scaffold\Classes\Console\CreatePlugin;

class ScaffoldServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('command.create.model.jexme', function () {
            return new CreateModel;
        });

        $this->app->singleton('command.create.controller.jexme', function () {
            return new CreateController;
        });

        $this->app->singleton('command.create.plugin.jexme', function () {
            return new CreatePlugin();
        });

        $this->commands('command.create.model.jexme');
        $this->commands('command.create.controller.jexme');
        $this->commands('command.create.plugin.jexme');
    }

    public function provides()
    {
        return [
            'command.create.model',
            'command.create.controller',
            'command.create.plugin',
        ];
    }
}
