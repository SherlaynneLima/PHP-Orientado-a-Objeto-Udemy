<?php

class Pessoa{
        public $nome;
        public $idade;
        public $email;

        public function dados(){
            return "Meu nome é {$this->nome}, minha idade é {$this->idade}, e meu email é {$this->email}";
        }
    }

    ?>