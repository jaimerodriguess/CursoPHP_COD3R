<div class="title">Classe Abstrata</div>
<?php
abstract class abstractA {
    abstract public function method1();
    abstract protected function method2($params);
}
abstract class abstractAChild extends abstractA {
    public function method1(){
        echo 'Executando metodo 1!';
    }
    abstract public function method3();
}
class Concret extends abstractAChild {
    public function method1() {
        echo "Executando método 1 extendido <br>";
        parent::method1();
    }
    protected function method2($params){
        echo "Executando método 2, com parametro - $params <br>";
    }
   public function method3() {
    echo "Executando método 3 <br>";
    $this->method2('interno');
   }
}

$c = new Concret;
$c->method1();
$c->method3('Externo');
