<div class="title">Visibilidade</div>
<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function showA(){
        echo "Classe A = Público = {$this->publico}<br>";
        echo "Classe A = Protegido = {$this->protegido}<br>";
        echo "Classe A = Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca(){
        echo "Mostrar por herança!";
    }
}
class B extends A {
    public function showB(){
        echo "Classe A = Público = {$this->publico}<br>";
        echo "Classe A = Protegido = {$this->protegido}<br>";
        echo "Classe A = Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}
$classeA = new B;
$classeA->showB();

