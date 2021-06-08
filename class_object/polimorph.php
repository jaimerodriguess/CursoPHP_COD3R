<div class="title">Polimorfismo</div>
<?php
abstract class Food {
    public $weight;
}
abstract class Drink {
    public $liter;
}
class Rice extends Food {

}
class Bean extends Food {

}
class Noodle extends Food {

}
class Juice extends Drink {

}
class Beer extends Drink {

}
class People {
    public $weight;
    function __construct($weight) {
        $this->weight = $weight;
    }
    public function eat(Food $food) {
        $this->weight += $food->weight;
    }
}
$c1 = new Noodle;
$c1->weight = 0.5;
$p = new People(85);
$p->eat($c1);

echo $p->weight;
