<?php

use App\Controller\Login;
use Base\Application;
use Base\Route;

require './src/config.php';
require './vendor/autoload.php';
//$_SERVER['REQUEST_URI'] = str_replace('/practice_php3.local/', '/', $_SERVER['REQUEST_URI']);
$route = new Route();
$route->add('/', Login::class);

$app = new Application($route);
$app->run();