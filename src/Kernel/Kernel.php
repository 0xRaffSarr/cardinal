<?php

namespace Cardinal\Kernel;


use Cardinal\Provider\AppProvider;

class Kernel extends \CardinalCore\Kernel\Kernel
{
    protected array $provider = [
        'app' => AppProvider::class
    ];
}
