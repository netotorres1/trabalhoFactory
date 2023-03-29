<?php

include "Pessoa.php";

class Gestor extends Pessoa{

    public $name = "Paiva";
    public $phone = "9999999";
    public $address = "Rua Uniube 55";

    public function pagamento(){
        echo "O gestor possui um salário de 2.000 reais";
    }
}