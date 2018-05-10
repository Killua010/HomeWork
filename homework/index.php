<?php

require 'resource/app/controllers/PagesController.php';

$controllerName =  (empty($_GET['controller'])  
                ? 'pages' : $_GET['controller']) . 'Controller';
$actionName = empty($_GET['action'])
                ? 'home' : $_GET['action'];
									// pagina a entrar no browser
$controller = new $controllerName();					// instancia um controlador
$controller->$actionName();						// chama o metodo do controlador

 ?>
