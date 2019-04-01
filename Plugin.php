<?php

namespace Jexme\Scaffold;

use Illuminate\Support\Facades\App;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function register()
    {
        App::register(Classes\ScaffoldServiceProvider::class);
    }
}
