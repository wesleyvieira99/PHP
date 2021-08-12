<?php

class Caneta { //Criação de classe "Caneta"
    public $modelo; // Atributo modelo como sendo público
    private $ponta; // Atributo ponta como sendo privado

    public function  __consctruct () { //Função construtora
        $this->cor = "Azul"
    }

    public function getModelo() { //Função Getter, para pegar um valor
        return $this->$modelo;
    }
    public function setModelo($m) { //Função Setter, para adicionar um valor
        $this->$modelo = $m

    }

    public function getPonta() { //Função Getter, para pegar um valor
        return $this->$ponta;
    }
    public function setPonta($p) { //Função Setter, para adicionar um valor
        $this->$ponta = $p

    }
}