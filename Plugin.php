<?php namespace Jexme\Scaffold;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'scaffold',
            'description' => 'No description provided yet...',
            'author'      => 'jexme',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        Carbon::setLocale(config('app.locale'));
        App::register('\Jexme\Scaffold\Classes\ScaffoldServiceProvider');
    }
}