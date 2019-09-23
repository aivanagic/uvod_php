<?php

// WHILE PETLJA

$a = 1;


while($a <= 100){ //dok god je varijabla a manja od 100 ponavlja se ono što se nalazi između vitičastih zagrada {}
    echo $a.'<br>'; // beskonačna petlja, u beskonačno bi ispisivao vrijednost varijable a (1)
    $a++; // uvećava vrijednost sve do 100, dođe do 101 i izađe
}

while ($a > 10) { // zaustavi se dok je veće od 10
    echo $a.'<br>';
    $a--;
}