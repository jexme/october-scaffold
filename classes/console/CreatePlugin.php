<?php

namespace Jexme\Scaffold\Classes\Console;

use October\Rain\Scaffold\Console\CreatePlugin as CreatePluginBase;

class CreatePlugin extends CreatePluginBase
{
    protected $name = 'create:plugin:jexme';

    protected $stubs = [
        'plugin/plugin.stub'       => 'Plugin.php',
        'plugin/plugin.yaml.stub'  => 'plugin.yaml',
        'plugin/version.stub'      => 'updates/version.yaml',
        'plugin/lang-en-lang.stub' => 'lang/en/lang.php',
        'plugin/lang-ru-lang.stub' => 'lang/ru/lang.php',
    ];
}
