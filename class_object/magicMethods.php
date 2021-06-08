<div class="title">Métodos Mágicos</div>
<?php
class People {
    public $name;
    public $age;

    public function __construct($name, $age) {
        echo 'Construtor Invocado!<br>';
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct() {
        echo "Destruido!";
    }
    public function __toString() {
        echo "Chamou __toString <br>";
        return "{$this->name} tem {$this->age} anos.";
    }
    public function __get($attr) {
        echo "<br> Chamou __get!";
        echo "<br> Lendo atributo não declarado: {$attr}";
        return $attr;
    }
    public function __set($attr, $value) {
        echo "<br>Chamou __set!";
        echo "<br> Alterando atributo não declarado: {$attr} / {$value}";
    }
    public function __call($method, $params) {
        echo "<br>Tentando executar método ${method}";
        echo "<br>parametros";
        print_r($params);
    }
    public function present(){
        echo $this . "<br>";
    }
}
$p = new People('Jaime', 41);
echo $p->present();
echo $p;

$p->exec(1, 'dois',[3, 'quatro', 5]);
