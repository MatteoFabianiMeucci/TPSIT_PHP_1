<?php
    class Utente{
        protected $nome;
        function constructor($nome){
            $this->nome = $nome;
        }

        function getNome() /* : String (tipo di ritorno)*/ {
            return $this->nome;
        }

        function setName($nome){
            $this->nome = $nome;
        }
    }


?>