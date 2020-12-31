<?php


namespace Cardinal\Provider;

use CardinalCore\Kernel\Contracts\Provider;

class AppProvider implements Provider
{

    /**
     * @inheritDoc
     */
    public function boot()
    {
        include __DIR__ .'/../../routes/web.php';
    }
}
