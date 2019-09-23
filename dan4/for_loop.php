<?php

$i = 1;


while ($i <= 10) { // while se rjeđe koristi, jer se ista stvar može pisati u FOR petlji
    echo $i.'<br>';
    $i++;
}
echo '<br>';


// isto u petlji FOR
for($i=1; $i <= 10; $i++){// inicijalizacija (postavljanje varijable brojača); uvjet; iterator
    echo $i.'<br>'; // nakon ove linije koda se uvećava za 1
}

echo '<br>';

for ($x=10; $x >= 1; $x--) { 
    echo $x.'<br>';
}

