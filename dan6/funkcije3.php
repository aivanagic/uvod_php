<?php

//Predaja parametara putem reference (str. 81)

function potencija(&$val){ //&$ refenca na prosljeđenu varijablu a
    $val = $val * $val;
}

$a = 3;
potencija($a);
echo $a;