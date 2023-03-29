<?php

include "PessoaFactory.php";
include "Gestor.php";

class GestorFactory implements PessoaFactory{
    public function criarPessoa(){
        return new Gestor();
    }
}