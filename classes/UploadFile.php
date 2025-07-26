<?php

class UploadFile extends Upload{

public $extensions = ['zip','rar','pdf'];

public function __construct($file){
    parent::__construct($file);
    echo "construtor do upload file";
}

//fazer upload do arquivo
public function upload(){
    return "Gerou o arquivo {$this->newName}";
}

}
?>