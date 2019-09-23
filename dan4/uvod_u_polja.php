<?php

$cipele = array(); // inicijaliziramo prazno polje tj. kreiramo prazan ormar :))

$cipele[]='Gucci'; // na koje [] mjesto u ormaru smpremamo tj. u varijabli cipele imamo spremljeno 5 string-ova
$cipele[1]='Adidas'; // ovaj način je dobar ako sami želimo sami odrediti određeni indeks
$cipele[2]='Nike';
$cipele[3]='Puma';
$cipele[4]='Vans';
//$cipele[24]='Cipele';

// postoje i asocijativna polja gdje bi ključevi bili stringovi


//var_dump($cipele); // prima neku varijablu i ispisuje koji je tip varijable i što se u njoj nalazi
echo '<pre>';
print_r($cipele);
echo '</pre>';

echo 'Element polja $cipele na drugom mjestu je '.$cipele[1];// drugi po redu na listi ali s indeksom 1

echo '<br>Polje $cipele sastoji se od '.count($cipele).' elemenata';

$cipele2 = array(); 

$cipele2[]='Gucci';// ovdje se PHP brine za indekse
$cipele2[]='Adidas';
$cipele2[]='Nike';
$cipele2[]='Puma';
$cipele2[]='Vans';


$cipele3 = array('Gucci', 'Adidas', 'Nike', 'Puma', 'Vans');

$cipele4 = ['Gucci', 'Adidas', 'Nike', 'Puma', 'Vans'];// najjednostavniji način za kreiranje/inicijaliziranje polja

$cipele5 = [1 => 'Gucci', 12 => 'Adidas', 0 => 'Nike', 4 => 'Puma', 5 => 'Vans']; // "raketa" => služi za pridruživanje vrijednosti polju
echo '<pre>';
print_r($cipele5);
echo '</pre>';

for ($i=0; $i < count($cipele);  $i++) { // count($cipele) umjesto i <= 4
    echo $cipele[$i].'<br>';
}

//foreach petlja za ispis asocijativnih ključeva ili samoinicijativno dodijeljenih (nisu unutar nekog rang-a)

foreach ($cipele5 as $key => $value) {// ispiši svaki redak kao ključi vrijednost
    echo $key.'-'.$value.'<br>';
}
