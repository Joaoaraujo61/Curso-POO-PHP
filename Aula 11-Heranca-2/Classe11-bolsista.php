<?php
require_once 'Classe11-aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){

    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }
}
?>