<?php

class UploadFoto{

    public $file;
    public $newName;
    public $extensions = ['png','jpg'];
    
    public function file($file){
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

    //fazer upload do arquivo
    public function upload(){
        return $this->newName;
    }
}

?>