<div class="title">Paradigma</div>

<?php
class Client {
    public $name = 'Jaime';
    public $age = 41;

    public function presentation(){
        echo "Olá! Meu nome é $this->name, tenho $this->age.";
    }
}
$c1 = new Client();
$c1->presentation();

class DateChallenge{
    public $day = 24;
    public $mouth = 05;
    public $year = 2021;

    public function today(){
        echo "Hoje é $this->day/$this->mouth/$this->year";
    }
}
$hoje = new DateChallenge();
$hoje->today();