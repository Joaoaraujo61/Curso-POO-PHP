<?php
require_once 'Classe10-Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function receberAum($valor){
        $this->setSalario($this->getSalario() + $valor);
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($es){
        $this->especialidade = $es;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($s){
        $this->salario = $s;
    }
}
?>