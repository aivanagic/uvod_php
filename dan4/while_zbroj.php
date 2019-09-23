<?php
// ITERATOR

$i = 1;
$result = 0;

// zbraja sve brojeve od 1 do 10 ( 1 + 2 + 3 + 4.... = 55)
while($i <= 10) {
    echo $result.'+'.$i.' = '; // ispisuje postupak (brojeve koje zbraja) za svaku iteraciju
    $result += $i;
    echo $result.'<br>'; // ispiši rezultat svaki put kad prolazi kroz petlju
    $i++;

}

echo $result;