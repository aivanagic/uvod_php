<?php

$a = 1;
$b = 1;

while ($a <= 10) {
    echo 'A='.$a.'<br>';
    $a++;
    while ($b <= 10) { // ova petlja se izvršava do 10 i onda se vraća u "vanjsku" petlju
        echo 'B='.$b.'<br>';
        $b++;
    }
    echo $b;
    $b = 1; // resetiramo varijablu b na 1 i za svaki a izvršava 10 puta unutarnju petlju za var b
    // vanjska petlja izvršit će se 10 puta a unutarnja 10 x 10 tj 10 puta za svaki a
}

$a = 1;
$b = 1;

while ($a <= 10) {

    $a++;
    while ($b <= 10) {
        echo 'b='.$b;
        $b++;
    }
    $a++;
    echo '<br>';
    $b = 1;
}