<?php

namespace Jexme\Scaffold\Classes\Console;

use October\Rain\Scaffold\Console\CreateController as CreateControllerBase;

class CreateController extends CreateControllerBase
{
    protected $name = 'create:controller:jexme';

    protected $stubs = [
        'controller/_list_toolbar.stub'    => 'controllers/{{lower_name}}/_list_toolbar.htm',
        'controller/_reorder_toolbar.stub' => 'controllers/{{lower_name}}/_reorder_toolbar.htm',
        'controller/config_filter.stub'    => 'controllers/{{lower_name}}/config_filter.yaml',
        'controller/config_form.stub'      => 'controllers/{{lower_name}}/config_form.yaml',
        'controller/config_list.stub'      => 'controllers/{{lower_name}}/config_list.yaml',
        'controller/config_reorder.stub'   => 'controllers/{{lower_name}}/config_reorder.yaml',
        'controller/config_relation.stub'  => 'controllers/{{lower_name}}/config_relation.yaml',
        'controller/create.stub'           => 'controllers/{{lower_name}}/create.htm',
        'controller/index.stub'            => 'controllers/{{lower_name}}/index.htm',
        'controller/preview.stub'          => 'controllers/{{lower_name}}/preview.htm',
        'controller/update.stub'           => 'controllers/{{lower_name}}/update.htm',
        'controller/reorder.stub'          => 'controllers/{{lower_name}}/reorder.htm',
        'controller/controller.stub'       => 'controllers/{{studly_name}}.php',
    ];
}
