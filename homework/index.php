<?php

require 'resource\app\controllers\PagesController.php';

$controllerName =  'pagesController';					// declara controlador de paginas
	
$actionName = 'home';						// declara o metodo a ser chamado
									// pagina a entrar no browser
$controller = new $controllerName();					// instancia um controlador
$controller->$actionName();						// chama o metodo do controlador

 ?>
