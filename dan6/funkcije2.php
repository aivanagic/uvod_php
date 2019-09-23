<?php

$polje = [1,5,2,7,9,12,20];

$polje2 = [1,5,9,12,20];


function suma($a){// varijabla kojom prosljeđujemo vrijednost ($a) ne mora biti ista tj. $polje

    $zbroj = 0;
    foreach ($a as $value) {
        $zbroj += $value;
    }
    return($zbroj);
}
echo suma($polje);


echo suma($polje2);