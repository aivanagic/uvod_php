<?php

// 

function ispis(){
    $c = 3 + 10;
    echo $c;
}

ispis(); // pozivanje funkcije

echo '<br>';

function vrati(){
    $c = 5 + 9;
    return $c; // vraća podatak tj. vrijednost
}

$d = vrati() + 5;
echo $d;
echo vrati(); // ispis spremljene vrijednost u funkciji

// funkcija koja prima parametre

echo '<br>';

function zbroji ($a, $b){
    echo $a + $b;
}
echo zbroji(10,20);// ako je (prazno) ne vraća ništa (void)

echo '<br>';

function oduzmi ($a, $b){
    echo $a - $b;
}
echo oduzmi(10,30);