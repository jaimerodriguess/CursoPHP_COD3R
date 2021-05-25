<div class="title">Herança</div>
<?php
class People {
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        return 'Pessoa criada!';
    }
    function __destruct(){
        return 'Pessoa destruida!';
    }
    public function presentation(){
        return "Meu nome é {$this->name}, tenho {$this->age}";
    }
}
class User extends People {
    public $login;
    function __construct($name, $age, $login){
        $this->name = $name;
        $this->age = $age;
        $this->login = $login;
        echo "Usuário criado!</br>";
    }
    function __destruct(){
        echo "Usuário destruido!</br>";
    }
    public function presentation(){
        echo parent::presentation();
        return ", meu login é {$this->login}";
    }
}
$pessoa = new User('Jaime', 41, 'jaime41');
echo $pessoa->presentation();