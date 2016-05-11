<?php
require('../vendor/autoload.php');
use Edge\Core\Edge;
//the path below is resolved due to the include path setting in composer.json
$webApp = new Edge("Application/Config/config.php");
$router = $webApp->getConfig('routerClass');
(new $router($webApp->getRoutes()))->invoke();