<?php
require_once 'Interface9.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totpag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        print "Título: " . $this->getTitulo();
        print "Autor: " . $this->getAutor();
        print "Total de páginas: " . $this->getTotpag();
        print "Leitor: " . $this->getLeitor();
    }
    public function abrir(){
        if($this->getAberto(false)){
            $this->setAberto(true);
            print "Livro aberto";
        }
        else{
            print "Livro á está aberto";
        }
    }
    public function fechar(){
        if($this->getAberto(true)){
            $this->setAberto(false);
            print "Livro fechado";
        }
    }
    public function folhear($p){
        $this->setPagAtual($p);
        print "Página " . $this->getPagAtual();
    }
    public function avançarPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
        print "Página " . $this->getPagAtual();
    }
    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual() - 1);
        print "Página " . $this->getPagAtual();
    }

    public function __construct($t, $a, $tp, $l){
        $this->titulo = $t;
        $this->autor = $a;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->totpag = $tp;
        $this->leitor = $l;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($a){
        $this->autor = $a;
    }
    public function getTotpag(){
        return $this->totpag;
    }
    public function setTotpag($tp){
        $this->totpag = $tp;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pa){
        $this->pagAtual = $pa;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($ab){
        $this->aberto = $ab;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($l){
        $this->leitor = $l;
    }
}
?>