<?php
interface Publicacao{//refere a classe Livro
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avançarPag();
    public function voltarPag();
}
?>