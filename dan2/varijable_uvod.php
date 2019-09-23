<?php

echo "Neki probni tekst";

echo '<br>';

//Varijable

$ime = 'Aleksandar'; // -> ova vrsta podatka naziva se String (niz znakova)
$dob = 34; // ova vrsta podatka naziva se Integer (cijeli broj)
$masa = 97.8; // ova vrsta podatka naziva se Float (decimalni broj)
$hobiji = array('jedrenje', 'arheologija', 'plivanje', ); // array (polje podataka), možemo zapisivati više vrijednosti
$samac = true; // boolean (logička vrijednost)

echo $ime.'<br>'.$masa.' <p>'; // Točka je operator spajanja stringova (. = concatenate tj. +) Događa se konverzija podataka (masa) u string.
echo $dob.'<br>';

// echo $hobiji; // Array se ne može ispisivati na ovaj način

echo $samac;
echo '<br>';

var_dump($ime);
echo '<br>';
var_dump($ime.', '.$dob);
echo '<br>';
echo 'Moje ime je'.$ime.'.';
echo '<br>';
echo "Moje ime je $ime."; //ne radi sa svim tipovima podataka
echo '<br>';
echo 'Moje ime je $ime.';

// Promijena vrijednosti varijable
echo $ime . '<br>';
$ime = 'Ivan';
echo $ime.'<br>';
$ime = 23;
$ime = NULL;
var_dump($ime);
?>