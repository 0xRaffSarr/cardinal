<?php
//load cardinal helpers function
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ .'/vendor/xraffsarr/cardinal-core/CardinalCore/Helper/functions.php';
// load composer autoload
require_once __DIR__ .'/vendor/autoload.php';

(new Dotenv())->load(__DIR__.'/.env');

\Cardinal\App::create(env('APP_NAME'), env('APP_URL'));

app()->bootProvider();
