<?php

include "Pessoa.php";

class Aluno extends Pessoa{
    public $name = "Renato";
    public $phone = "4444444";
    public $address = "Rua XI 240";

    public function pagamento(){
        echo "Aluno não possui salário";
    }
}