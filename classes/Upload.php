<?php

class Upload{

    public $file;
    public $newName;
public function __construct($file){
       $this->file = $file;
    }

//Pegando a extensão do arquivo  
public function extension(){
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

   
//Renomear o arquivo
public function rename(){
    $uniqId = uniqid(true);
    $this->newName = $uniqId.'.'.$this->extension();
}


}

?>