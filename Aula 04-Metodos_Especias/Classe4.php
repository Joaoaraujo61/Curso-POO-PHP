<?php
class Caneta{
    public $modelo;
    private $cor;
    private $ponta;
    public function __construct($m, $c, $p){ //metodo contrutor (__construct ou nome da classe no caso "Caneta)
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function getModelo(){ //metodo getter
        return $this->modelo;
    }
    public function setModelo($m){ //metodo setter
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}
?>