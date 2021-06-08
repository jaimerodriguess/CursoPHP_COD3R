<div class="title">Interface</div>

<?php
interface Animal {
    public function breathe();
}
interface Mammal {
    public function suckle();
}
interface Canine extends Animal, Mammal {
    public function burk(): string;
}
class Dog implements Canine {
    public function breathe(){
        return "Respiro oxigênio";
    }
    public function burk(): string{
        return "Au! Au!";
    }
    public function suckle(){
        return 'Alimentando';
    }
}
$cachorro = new Dog;
echo $cachorro->suckle(), '<br>';
echo $cachorro->breathe(), '<br>';

var_dump($cachorro instanceof Dog);