<?php
class Caneta {

    //atributos//
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

        //métodos//
    public function rabiscar () {
        if ($this.$tampada == true) {
            echo "<p> Erro! Não posso rabiscar.";
        } else {
            echo "<p> Estou rabiscando...</p>";
        }
    }
}

    public function tampar () {
        $this.$tampada = true;
    }
    public function destampar () {
        $this.$tampada = false;
    }
?>
    