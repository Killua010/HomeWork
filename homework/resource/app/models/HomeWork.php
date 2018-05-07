<?php
    /**
     * classe de dominio HomeWork
     * relacionada aos deveres de casa de determinada materia
     * criado por Daniel Dias - 03/05/2018 - Versão 0.0.1
     */
    class HomeWork
    {
      var $materia;
      var $titulo;
      var $descricao;

      function __construct($materia, $titulo, $descricao)
      {
        $this->materia = $materia;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
      }

      public function validarDados()
      {
        if($this->$materia = '' || $this->$titulo = '' || $this->$descricao = ''){
          return false;
        }
        return true;
      }

      public function salvar()
      {
        # code...
      }

    }

 ?>
