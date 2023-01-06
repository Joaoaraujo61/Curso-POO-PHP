<?php
require_once 'Classe10-Pessoa.php';
class Aluno extends Pessoa{
    private $matr; //matricula
    private $curso;

    public function cancelarMatr(){
        $this->setMatr(false);
        print "Mátricula cancelada";
    }
    public function getMatr(){
        return $this->matr;
    }
    public function setMatr($m){
        $this->matr = $m;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso = $c;
    }
}
?>