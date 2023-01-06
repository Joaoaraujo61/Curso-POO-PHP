<?php
class Caneta{
    public $modelo; # Por padrão a visibilidade do PHP colocando o VAR é publico, mas podemos alterar isso
    public $cor; # PUBLIC para publico
    private $ponta; # PRIVATE para privado
    protected $carga; # PROTECTED para protegido
    protected $tampada;

     public function rabiscar(){
        if($this->tampada == false){/*  THIS refere-se a classe criada no caso a classe "caneta" */
            print "Estou rabiscando";
        }
        else{
            print " ERRO!!!";
        }
    }
    private function tampar(){
        $this->tampada = true;
    }
    private function destampar(){
        $this->tampada = false;
    }
}
?>