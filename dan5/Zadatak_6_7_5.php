<?php

$brojevi = array();

for ($i=1; $i<=100 ; $i++) { 
     $brojevi[$i] = $i; // 
}
foreach ($brojevi as $key => $value) {
    echo $value.'<br>';
}