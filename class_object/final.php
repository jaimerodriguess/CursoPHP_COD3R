<div class="title">Modificador FINAL</div>
<?php
abstract class AbstractA {
    abstract public function method1();
    final public function method2() {
        echo "Não vou mudar! <br>";
    }
}
class ClassE extends AbstractA {
    public function method1() {
        echo "Execuntando método1 <br>";
    }
    /*public function method2() {
        echo "Extendendo método 2! <br>";
    }*/
}
$classe = new ClassE;
$classe->method1();
$classe->method2();

final class Unica {
    public $attr;
}

class Duplicate extends Unica {
    public $attr2;
}

