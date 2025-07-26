<?php

require "classes/Pessoa.php";

$pessoa = new Pessoa();
$pessoa->idade=27;
$pessoa->nome="Sherlaynne";
$pessoa->email="Contato@dev.com.br";

echo $pessoa->dados();

?>