<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == false){/*  THIS refere-se a classe criada no caso a classe "caneta" */
            print "Estou rabiscando";
        }
        else{
            print " ERRO!!!";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
?>