<?php

$a = 1;
$b = 1;

echo '<h1>PRIMJER PRVI</h1>';

while ($a <= 10) { // ako nam je 10 ustvari popis korisnika možemo proći kroz taj popis
    echo $a.'<br>';
    
    if($a == 5){ // if $ime == ''
        echo ' - PET<br>';
    }

    if ($a == 8) {
        break; // ako je uvjet zadovoljen break zaustavlja daljnje izvođenje petlje, izlazi na vanjsku zatvarajuću vitičastu zagradu
    }

    $a++;
}

echo $a;

echo '<h1>PRIMJER DRUGI</h1>';

$a = 1;
$b = 1;

while ($a <= 10) {
    echo '<br>';
    
    while($b <= 10){
        echo $b;
        

        if ($b == 8) {
            break; // ako je samo break, break-at će samo unutarnju petlju i ispisat će 8 puta
            //break 2; // ako se napiše 2 = break u obje petlje, 3 za 3 itd... ispisat će jednom
        }

        $b++;
    }
    $b = 1;
    $a++;
}