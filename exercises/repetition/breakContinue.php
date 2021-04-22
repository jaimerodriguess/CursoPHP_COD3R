<div class="title">Break e Continue</div>
<?php
$letters = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE"
];
for($i = 0; $i <= count($letters); $i++){
    if($i %2 == 0 ){
        echo "$letters[$i] <br>";
    }
}

foreach($letters as $index => $letter){
    if($index % 2 == 0){
        echo "$letter <br>";
    }
}