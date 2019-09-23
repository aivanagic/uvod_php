<?php

$a = 5;
$b = 10;

if($a == $b){
    echo 'Jednake su.';
}else{
    echo 'Nisu jednake';
}

echo '<br>';

// operator usporedbe MANJE OD
if ($a < $b) {
    echo $a.' tj. a je manje od b '.$b;
} else {
    echo 'a je veće od b';
}

echo '<br>';

// operator usporedbe VEĆE ILI JEDNAKO
if ($a >= $b) {
    echo 'a je veće ili jednako od b';
} else {
    echo 'a je manje od b';
}

echo '<br>';

// Operator usporedbe MANJE ILI JEDNAKO
if ($a <= $b) {
    echo 'a je manje ili jednako od b';
} else {
    echo 'a je veće od b';
}
