<?php

include "PessoaFactory.php";
include "Professor.php";

class ProfessorFactory implements PessoaFactory{
    public function criarPessoa(){
        return new Professor();
    }
}