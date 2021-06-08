<div class="title">Desafio dos 7 erros</div>
<?php
interface Template {
    public function method1();
    public function method2($params);
}
//abstract class abstractClass extends Template {
abstract class abstractClass implements Template {
    public function method3() {
        echo "Estou funcionando!";
    }
}
//class Classe implements abstractClass {
class Classe extends abstractClass {
    function __construct($params) {

    }
    public function method1() {
        echo "Método 1 - Inetrface";
    }
    public function method2($params) {
        echo "Método 2 - Interface $params";
    }
}
$exemplo = new Classe('...');
//$exemplo = new Classe();
$exemplo->method3();
//Classe::method2('Externo');