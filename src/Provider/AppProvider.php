<?php


namespace Cardinal\Provider;

use CardinalCore\Kernel\Contracts\Provider;
use CardinalCore\Support\Facade\Logger;

class AppProvider implements Provider
{

    /**
     * @inheritDoc
     */
    public function boot()
    {
        include __DIR__ .'/../../routes/web.php';

        //Logger settings
        Logger::setAppendToFile(false)->setJson(true);
    }
}
