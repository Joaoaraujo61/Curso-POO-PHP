<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
 
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        
        if($t == "cc"){
            $this->setSaldo(50);
        }
        elseif($t =="cp"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
       if($this->getSaldo() > 0){
           print "Retire o saldo para fechar a conta<br>";
       }
       elseif($this->getSaldo() < 0){
           print "Pague a dívida para fechar a conta";
       }
       else{
           $this->setStatus(false);
       }
    }
    public  function depositar($v){
        if($this->getStatus() == false){
            print "Conta não encontrada abra a conta primeiro";
        }
        else{
            $this->setSaldo($this->getSaldo() + $v); 
        }
    }
    public function sacar($v){
        if($this->getStatus() == true){
           if($this->getSaldo() >= $v || $this->getsaldo() <= $v){
               $this->setSaldo($this->getSaldo() - $v);
           }
           else{
               print "________________________";
               print "<br><br>Sem valor diponivel<br>";
               print "________________________<br><br>";
           }
        }
        else{
            "Impossível sacar";
        }
    }
    public function PagMensal(){
        if($this->getTipo() == "cc"){
            $v = 12;
        }
        elseif($this->getTipo() == "cp"){
            $v = 20;
        }
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $v);
        }
        else{
            print "Abra a conta primeiro";
        }
    }
    //metodos especiais
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        print "Conta aberta com sucesso<br>";
    }
    public function setNumconta($n){
        $this->numConta = $n;
    }
    public function getNumConta(){
        return $this->numConta;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getTipo(){
        return $this->tipo;
    } 
    public function setDono($d){
        $this->dono = $d;
    }
    public function getDono(){
        return $this->dono;
    } 
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus($st){
        $this->status = $st;
    }
    public function getStatus(){
        return $this->status;
    }
}
?>