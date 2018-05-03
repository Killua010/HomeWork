<?php
  /**
   *  classe de dominio Materia
   *  relacionada aos dados de uma materia de determinado curso
   * criado por Daniel Dias - 03/05/2018 - Versão 0.0.1
   */
  class materia
  {
    private $descricao;

    function __construct($descricao)
    {
      $this->$descricao = $descricao;
    }

  }

 ?>
