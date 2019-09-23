<?php

$naziv = 'Algebra';

// Želimo izbrojati koliko znakova sadrži $naziv

$duljina = strlen('Aleksandar'); //koliko string koji predamo ima znakova
$duljina = strlen($naziv);

echo $duljina;

echo '<br>';

if ($duljina > 10) {
    echo 'Naziv "'.$naziv.'" ima više od 10 znakova.';
}elseif($duljina >= 5 && $duljina <= 10){
    echo 'Naziv "'.$naziv.'" je u zadanom nizu (5 - 10)';
}else{
    echo 'Naziv #'.$naziv.'" ima manje od 5 znakova.';
}

echo '<br>';

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova.';
}elseif($duljina == 9){ //umjesto toliko elseif koristimo SWITCH (vidi file switch.php)
    echo 'Naziv ima 9 znakova';
}elseif($duljina == 8){
    echo 'Naziv ima 8 znakova';
}elseif($duljina == 7){
    echo 'Naziv ima 7 znakova';
}else{
    echo 'Naziv je prekratak.';
}

echo '<br>';

$a = ''; //logička vrijednost praznog stringa je 0
$b = '';



if (empty($a)) { // funkcija empty vraća true ili false A su prazne isto kao empty A i empty B
    if (empty($b)) { //
        echo 'Varijabla B je prazna.';
        echo 'Varijabla A je prazna';
    }else{
        echo 'Varijabla B nije prazna';
        echo 'Varijabla A je prazna';
    }
    
}else{// a nisu prazne
    if (empty($b)) {
        echo 'Varijabla B je prazna.';
        echo 'VArijabla A NIJE prazna'
    }else{
        echo 'Varijabla A NIJE prazna';
        echo 'Varijabla B NIJE prazna';
    }
}

if (emty($a) && empty($b)) {
    echo 'Varijabla B je prazna<br>';
    echo 'Varijabla A je prazna<br>';
}elseif(emty($a) && !empty($b)){
    echo 'Varijabla B NIJE prazna<br>';
    echo 'Varijabla A je prazna<br>';
}elseif(!emty($a) && empty($b)){
    echo 'Varijabla B je prazna<br>';
    echo 'Varijabla A NIJE prazna<br>';
}else{ // ili elseif !emty($a) && !empty($b)
    echo 'Varijabla B NIJE prazna<br>';
    echo 'Varijabla A NIJE prazna<br>';
}