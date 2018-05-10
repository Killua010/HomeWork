<?php

/**
 * classe de implementação PagesController
 * Classe do controle das paginas
 * criado por Daniel Dias - 03/05/2018 - Versão 0.0.1
 */
class PagesController
{

  function home()
  {
    include 'resource/app/views/Formulario.php';
  }

  function dadosSalvar(){

    require 'resource/app/models/Materia.php';
    require 'resource/app/models/HomeWork.php';

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $materia = $_POST['materia'];

    $objMateria = new Materia($materia);
    $objHomeWork = new HomeWork($objMateria, $titulo, $descricao);

    if($objHomeWork->validarDados()){
      echo "Dados Invalidos";
    }
    /*

    echo $materia . ' ' . $descricao . ' ' . $titulo;*/

  }
}


 ?>
