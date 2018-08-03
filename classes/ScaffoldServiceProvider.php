<?php namespace Jexme\Scaffold\Classes;

use Illuminate\Support\ServiceProvider;
use Jexme\Scaffold\Classes\Console\CreateController;
use Jexme\Scaffold\Classes\Console\CreateModel;

class ScaffoldServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->singleton('command.create.model.jexme', function () {
            return new CreateModel;
        });

        $this->app->singleton('command.create.controller.jexme', function () {
            return new CreateController;
        });

        $this->commands('command.create.model.jexme');
        $this->commands('command.create.controller.jexme');
    }

    public function provides() {
        return [
            'command.create.model',
            'command.create.controller',
        ];
    }
}
