<?php namespace Jexme\Scaffold\Classes\Console;

class CreateModel extends \October\Rain\Scaffold\Console\CreateModel
{
    protected $name = 'create:model:jexme';

    protected $stubs = [
        'model/model.stub'        => 'models/{{studly_name}}.php',
        'model/fields.stub'       => 'models/{{lower_name}}/fields.yaml',
        'model/columns.stub'      => 'models/{{lower_name}}/columns.yaml',
        'model/create_table.stub' => 'updates/create_{{snake_plural_name}}_table.php',
    ];
}
