<?php

// Napuniti polje s 10 elemenata
$polje = array('e1' => 'Element1', 'Element2', 'Element3', 'Element4', 'Element5', 'Element6', 'Element7', 'Element8', 'Element9', 'Element10');

// Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez

function ispis_vrijednosti_elementa_polja($polje){
    $counter = 1;
    foreach ($polje as $kljuc => $vrijednostelementa) {
        
        if ($counter < count($polje)) {
            echo 'Ključ '.$kljuc.' = '.$vrijednostelementa.',<br>';
        }else{
            echo 'Ključ '.$kljuc.' = '.$vrijednostelementa;
        }
        $counter++;
    }
    echo '<br>Broj elemenata polja: '.count($polje).'<br>';
}


// ili ovako:
$a = array('a1' => 'A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10');
foreach ($a as $key => $value) {
    if ($key+1 < count($a)) {
        $value .= ', ';
    }
    echo $value;
}

// ili ovako:
$counter2 = 1;
foreach ($a as $key => $value) {
    if ($counter2 < count($a)) {
        $value .= ', ';
    }
    $counter2++;
    echo $value;
}

// ili s funkcijom implode:

implode(',',$a);


echo 'ISPIS VRIJEDNOSTI SVAKOG ELEMENTA POLJA<br>';
ispis_vrijednosti_elementa_polja($polje);
echo '<br>';

// Izbrisati prvi i zadnji element polja
//unset($polje[1]);
array_shift($polje);
array_pop($polje);

// Ispisati vrijednost svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
echo '<br>ISPIS VRIJEDNOSTI SVAKOG ELEMENTA POLJA NAKON BRISANJA 1. I ZADNJEG ELEMENTA<br>';
ispis_vrijednosti_elementa_polja($polje);
echo '<br>';

// Sortirati polje uzlazno
asort($polje);

// Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
echo 'ISPIS VRIJEDNOSTI SVAKOG ELEMENTA POLJA NAKON SORTIRANJA POLJA UZLAZNO<br>';
ispis_vrijednosti_elementa_polja($polje);
echo '<br>';




