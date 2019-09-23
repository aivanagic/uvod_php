<?php
$a = 0;

$a = $a + 1;
$a++; // INKREMENT OPERATOR (operator povećavanja vrijednosti za 1)

echo $a;

$a--; //INKREMENT OPERATOR (operator smanjivanja vrijednosti za 1)

$b = $a++; 
echo $b; //ovje je rezultat 1. Prvo obavljena operacija pridruživanja vrijednosti var a u var b 
//a potom se $a povećava za 1 operacija ++

$b = ++$a;// radi obrnuto