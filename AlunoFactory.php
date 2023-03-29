<?php

include "PessoaFactory.php";
include "Aluno.php";

class AlunoFactory implements PessoaFactory{
    public function criarPessoa(){
        return new Aluno();
    }
}