<?php

$a = 3;
$b = 4;

if ($a == $b) {
    echo 'Varijable su jednake';
}else{
    echo 'Varijable nisu jednake';
}

echo '<br>';

// Skraćeni zapis redaka 6-10 TERNARNIM OPERATOROM
($a == $b) ? print 'Da': print 'Ne';  // što će učiniti ako nisu jednake (else) Echo ne radi s ternarnim operatorom
// koristi se kao atribut u html-u. Npr. ako je Ž ispiši crvenom bojom, a ako je M ispiši plavom bojom a to ne možemo ugurati u formatu kao u 6-10 retku)
