<div class="title">Traits #02</div>
<?php
trait validation {
    public function validationString($str) {
        return isset($str) && $str !== '';
    }
}
trait bestValidation {
    public function validationString($str) {
        return isset($str) && trim($str);
    }
}

class User {
    use validation, bestValidation {
        bestValidation::validationString insteadOf validation;
        validation::validationString as simpleValidation;
    }
}
$user = new User;
echo $user->validationString('Jaime');
echo $user->simpleValidation('Jaime');