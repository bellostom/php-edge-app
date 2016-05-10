<?php
require('../vendor/autoload.php');
set_include_path("." . PATH_SEPARATOR . realpath(__DIR__."/../"));
use Edge\Core\Edge;
$webApp = new Edge("Application/Config/config.php");
$router = $webApp->getConfig('routerClass');
(new $router($webApp->getRoutes()))->invoke();