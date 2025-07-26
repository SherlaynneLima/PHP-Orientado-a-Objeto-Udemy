<?php

require "classes/Pessoa.php";
require "classes/Upload.php";
require "classes/UploadFoto.php";
require "classes/UploadFile.php";
require "classes/AtividadesPessoa.php";

$upload = new UploadFile('arquivo.zip');

//echo $upload->teste();

/*
$upload->file('foto.png');
*/
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