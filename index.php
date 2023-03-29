<?php

include "AlunoFactory.php";

$factory = new AlunoFactory();

$pessoa = $factory->criarPessoa();

echo $pessoa->pagamento();
echo $pessoa->name;
echo $pessoa->address;
echo $pessoa->phone;
