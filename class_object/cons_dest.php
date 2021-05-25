<div class="title">Metodo Construtor & Destrutor</div>

<?php
class Peaple {

    public $name;
    public $age;

    function __construct($name, $age){
        echo "Construido!";
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct(){
        echo "Destruído!";
    }

    function presentation(){
        echo "Meu nome é $this->name, tenho $this->age anos.";
    }
}
$pessoa = new Peaple('Jaime', 41);
$pessoa->presentation();
unset($pessoa);