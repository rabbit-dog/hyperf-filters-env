<?php

namespace Filter\TestClass;

use Rabbit\Filter\ModelFilter;

class ClientFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relatedModel => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [
        'agent' => ['owner_name'],
    ];

    public function name($name)
    {
        $this->where('name', '=', $name);
    }
}
