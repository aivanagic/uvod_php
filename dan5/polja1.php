<?php

$boje = [];

$boje['boja1'] = 'žuta';
$boje['boja2'] = 'crvena';
$boje['boja3'] = 'zelena';
$boje['boja4'] = 'plava';

for ($i=1; $i <= count($boje); $i++) { 
    echo $boje['boja'.$i].'<br>';
}

echo '<pre>';
print_r($boje);
echo '</pre>';