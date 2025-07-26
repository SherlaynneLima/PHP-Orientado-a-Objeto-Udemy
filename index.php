<?php

require "classes/Pessoa.php";
require "classes/UploadFoto.php";
require "classes/AtividadesPessoa.php";

$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();


/*
$AtividadesPessoa = new AtividadesPessoa;

echo $AtividadesPessoa->pular();
echo "</br>";
echo $AtividadesPessoa->andar();
*/

/*
$pessoa = new Pessoa();
$pessoa->idade=27;
$pessoa->nome="Sherlaynne";
$pessoa->email="Contato@dev.com.br";

echo $pessoa->dados();
*/

?>