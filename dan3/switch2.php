<?php

$vrijeme = time();
echo $vrijeme;

echo '<br>';

echo date('d.m.Y H:i:s', $vrijeme); //https://www.php.net/manual/en/function.date.php



// Zad 1
// Napraviti kod da kada se pokrene ispiše
// u kojem smo kvartalu godine na temelju trenutnog vremena
echo '<br> Zadatak 1: kvartal u godini <br>';

$mjesec = date('n');
echo 'Mjesec u godini: '.$mjesec;

switch ($mjesec) { //switch (count($mjesec))
    case 1: // fall through - propadanje
    case 2: 
    case 3:
        echo '<br> 1. kvartal';
        break;
    case 4:// fall through
    case 5:
    case 6:
        echo '<br> 2. kvartal';
        break;
    case 7: // fall through
    case 8:
    case 9:
        echo '<br> 3. kvartal';
        break;
    case 10: // fall through
    case 11:
    case 12:
        echo '<br> 4. kvartal';
        break;
    
    default:
        echo 'Nepoznat kvartal';
        break;
}

// Zad 1 u IF-u, isto kao case 1-3 u SWITCH statementu iznad

if ($mjesec == 1 || $mjesec == 2 || $mjesec == 3) {
    echo '<p> 1. kvartal';
}elseif ($mjesec == 4 || $mjesec == 5 || $mjesec == 6){
    //....
}


// Zad 2.
// Napraviti kod da kada se pokrene ispiše koji
// je dan na temelju trenutnog vremena
echo '<br> Zadatak 2: dan u tjednu <br>';
$dan = date ('N'); // npr. 'l'
echo 'Dan u tjednu: '.$dan;

switch ($dan) {
    case '1': //'Monday'
        echo '<br> Danas je ponedjeljak :/';
        break;
    case '2': //
        echo '<br> Danas je utorak :|';
        break;
    case '3':
        echo '<br> Danas je srijeda :)';
        break;
    case '4':
        echo '<br> Danas je četvrtak :))';
        break;
    case '5':
        echo '<br> Danas je petak ;)))';
        break;
    case '6':
        echo '<br> Danas je subota :)))';
        break;
    case '7':
        echo '<br> Danas je nedjelja :))';
        break;
    
    default:
        echo '<br> Danas ne postoji.';
        break;
}
 