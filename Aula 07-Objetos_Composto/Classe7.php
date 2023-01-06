<?php

class Lutador{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Metodos
    public function apresentar(){
        print "______________________";
        print "<br>Lutador: " . ($this->getNome()) . "<br>";
        print "Origem: " . ($this->getNacionalidade()) . "<br>";
        print "Idade: " . ($this->getIdade()) . "<br>";
        print "Altura: " . ($this->getAltura()) . " m de altura <br>";
        print "Peso: " . ($this->getPeso()) . "<br>";
        print "Ganhaou: " . ($this->getVitorias()) . " lutas<br>";
        print "Perdeu: " . ($this->getDerrotas()) . " lutas<br>";
        print "Empatou: " . ($this->getEmpates()) . " lutas";
        print "<br>_______________________";
    }
    public function status(){
        print($this->getNome());
        print " é um peso " . ($this->getCategoria()) . " ";
        print ($this->getVitorias()) . " vitrórias ";
        print ($this->getDerrotas()) . " derrotas ";
        print "e " . ($this->getEmpates()) . " empates";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    //metodos especiais
    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$empt){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $empt;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($no){
        $this->nome = $no;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($al){
        $this->altura = $al;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($pe){
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }
        elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }
        elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }
        elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }
        else{
            $this->categoria = "Inválido";
        }
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vi){
        $this->vitorias = $vi;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($de){
        $this->derrotas = $de;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empt){
        $this->empates = $empt;
    }
}




















?>