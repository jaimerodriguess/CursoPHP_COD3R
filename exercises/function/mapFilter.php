<div class="title">Map & Filter</div>

<?php
$notes = [5.8, 6.7, 7.3, 8.8, 9.9];
/*$finalNotes = [];
foreach($notes as $note){
    $finalNotes[] = round($note);
}
print_r($finalNotes);
$finalNotes2 = array_map(round, $notes);
echo "<br>";
print_r($finalNotes2);
*/

foreach($notes as $note){
    if($note > 7){
        $finalNotes3[] = $note;
    }
}
echo "<br><pre>";
print_r($finalNotes3);
echo "</pre>";

function approved($note) {
    return $note > 8;
}

$approveds = array_filter($notes, approved);

print_r($approveds);