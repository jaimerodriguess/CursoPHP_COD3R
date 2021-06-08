<div class="title">Traits 01</div>
<?php

trait validation {
    public $valueA = 'valor A';
    public function validationString($str) {
        return isset($str) && $str !== '';
    } 
}
trait bestValidation {
    private $valueB = 'Valor B';
    public function bestValidationString($str) {
        return isset($str) && trim($str);
    }
}
class User {
    use validation, bestValidation;
    public function showValue() {
        echo $this->valueB;
    }
}
$user = new User;
echo $user->showValue();