<?php
require_once __DIR__ .'/../bootstrap.php';

use Cardinal\App;

$response = App::appInstance()->handle();

$response->send();
