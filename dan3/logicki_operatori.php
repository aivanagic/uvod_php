<?php

$a = 15;
$b = 10;
$c = 5;

// LOGIČKO i (and) && (provjerava uvjet po uvjet)
if ($b < $a && $c < $a && 8 > 3) {
    echo 'Uvjet je zadovoljen.'; //svi uvjeti moraju biti zadovoljeni ( u ovom primjeru 3 uvjeta)
} else {
    echo 'Uvjet NIJE zadovoljen.';
}

echo '<br>';

// LOGIČKO ili (or) ||
if ($b < $a && $c < $a || 8 < 3) { // mora biti zadovoljen (TRUE) jedan od izraza između operatora ILI (||)
    echo 'Uvjet je zadovoljen'; 
} else {
    echo 'Uvjet NIJE zadovoljen';
}

echo '<br>';

if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo 'Vrijednost varijable B nalazi se između $a i $c';
}
echo '<br>';

// LOGIČKO NE
if (!$a > $b) { // ! radi negaciju cijelog izraza. Prvo provjeri uvjet ( a veće od b) a onda radi negaciju
    echo 'Varijabla $a je veća od $b';
}else{
    echo 'Varijabla $a nije veća od $b';
}