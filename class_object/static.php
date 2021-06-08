<div class="title">Membros Estáticos   </div>

<?php
class A {
    public $noStatic = 'Variável não estática!';
    public static $static = 'Variável de Classe';
    public function showA(){
        echo "Não Estática = {$this->noStatic}<br>";
        //echo "Estático = {$this->static}<br>";
        echo "Estático = ".self::$static."<br>";
    }
    public static function showStatic(){
        echo "Função Estático = ".self::$static."<br>";
    }
}
//$objA = new A;
//$objA->showA();
echo A::$static, '<br>';
A::showStatic();