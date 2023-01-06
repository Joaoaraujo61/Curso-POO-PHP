<?php

require_once 'Classe7.php';

Class Luta {
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 <> $l2){
            $this->setAprovada(true);
            $this->setDesafiado($l2);
            $this->setDesafiante($l1);
        }
        else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }  
    public function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);//numero aleatorio entre 0 e 2
            switch($vencedor){
                case 0: //empate
                    print "Empate";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                break;
                case 1: //ganhou desafiado
                    print "O dasafiado" . $this->getDesafiado()->getNome() . " ganhou";
                    $this->getDesafiado()->ganhaLuta();
                    $this->getDesafiante()->perderLuta();
                break;
                case 2: //ganhou desafiante
                    print "O desafiante " . $this->getDesafiante()->getNome() . " ganhou";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
            }
        }
        else{
            print "Luta não pode acontecer"; 
        }
    } 
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($ante){
        $this->desafiante = $ante;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($ado){
        $this->desafiado = $ado;
    }
    public function getRounds(){
        return $this->round;
    }
    public function setRounds($ro){
        $this->rounds = $ro;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($ap){
        $this->aprovada = $ap;
    }
}
























?>