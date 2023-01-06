<?php
require_once 'Interface.php'; //requerir o arquivo de interface
class ControleRemoto implements Controlador/*implementar a interface controlador do arquivo de interface*/{ 
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        print "<br>Esta ligado ? " . ($this->getLigado()?"SIM":"NÃO");
        print "<br>Esta tocando? " . ($this->getTocando()?"SIM":"NÃO");
        print "<br>Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            print "|";
        }
        print "<br>";
    }
    public function fecharMenu(){
        print "Fechando Menu .......";
    }
    public function maisVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() - 5);
        } 
    }
    public function ligarmudo(){
        if($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume(0);
        } 
    }
    public function desligarMudo(){
        if($this->getLigado() == true && $this->getVolume() == 0){
            $this->setVolume(50);
        } 
    }
    public function play(){
        if($this->getLigado() == true){
            if($this->getTocando() == false){
                $this->setTocando(true);
            }
        }
    }
    public function pause(){
        if($this->getLigado() == true){
            if($this->getTocando() == true){
                $this->setTocando(false);
            }
        }
    }
}






























?>