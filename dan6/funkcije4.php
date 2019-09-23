<?php

function autor($autor){ // ispisuje format: I. Prezime
    
    $autor_array = explode(',', $autor); // razdjeljuje string prema zadanom delimiteru (,)
    //print_r($autor_array);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    $ime_slovo = strtoupper(substr($ime,0,1));// daj mi dio stringa (početak stringa je na 0 itd. Nama je kraj na 1)
    // prvi parametar od kud počinjemo, drugi koliko znakova želimo od početne pozicije
    // iz unutarnje prema vanjskoj (prvo substr, a onda strtoupper)

    $prezime = ucfirst(strtolower($prezime));

    return $ime_slovo . '. ' . $prezime;
}

echo autor('pEČIĆ,PeRo');
echo '<br>';
echo autor('ćarkiŽ,Marko');