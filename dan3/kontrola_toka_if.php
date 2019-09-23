<?php

$a = '1';
$b = 5;

// Operator usporedbe == (provjerava samo vrijednost podatka, neovisno o tipu podataka)
// Ne uspoređuje tip podatka

if($a == 1){ //u varijabli $a zapisana vrijednost 1 tj. 1 == 1 
    echo 'Isti je.';
}

// Operator usporedbe identično === (provjerava i vrijednost podatka i tip podatka)
if($a === 1){
    echo 'Isti je tip podatka.';
}

echo '<br>';

// Operator nejednakosti
if ($a != $b) { // ako je a različito od b
    echo 'Nisu jednaki'; // ako su različiti ispiši "Nisu jednaki"
}

if (5 != $b) { // ako je 5 različito od b
    echo 'Nisu jednaki'; // ako su različiti ispiši "Nisu jednaki"
}

echo '<br>';

// Operator usporedbe NE identičnosti
// Uspoređuje vrijednost podatka i koji je tip podatka
if ($a !== 2) {
    echo 'Različit je tip podatka';
}

