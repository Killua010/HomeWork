<?php

require 'resource\app\controllers\PagesController.php';

$controllerName =  (empty($_GET['controller'])  
                ? 'pages' : $_GET['controller']) . 'Controller';

$actionName = empty($_GET['action'])
                ? 'home' : $_GET['controller'];

$controller = new $controllerName();
$controller->$actionName();

 ?>
