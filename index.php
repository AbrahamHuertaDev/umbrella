<?php

/**
 * Umbrella - A PHP Framework 
 *
 * @package  Umbrella
 * @author   Abraham Huerta <abrahamhuertadev@gmail.com>
 */

define('ROOT', realpath(dirname(__FILE__)) . '/');
define('APP', ROOT . '/app/');

require_once ROOT . 'vendor/autoload.php';

$run     = new \Whoops\Run;
$handler = new \Whoops\Handler\PrettyPageHandler;
$JsonHandler = new \Whoops\Handler\JsonResponseHandler;

$run->pushHandler($JsonHandler);
$run->pushHandler($handler);
$run->register();


foreach (new DirectoryIterator(ROOT . 'bootstrap/system') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once ROOT . 'bootstrap/system/'. $fileInfo;
}


require_once APP . 'config/app.php';

use  Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();

$capsule->addConnection(\Core\App::config('database'));

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));


// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();


$capsule->bootEloquent();



foreach (new DirectoryIterator(ROOT . 'bootstrap/lib') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once ROOT . 'bootstrap/lib/'. $fileInfo;
}

foreach (new DirectoryIterator(ROOT . 'app/models/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once ROOT . 'app/models/'. $fileInfo;
}



require_once APP . 'routes.php';

$router = new Route;
$router->run();
