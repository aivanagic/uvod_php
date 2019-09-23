
<?php

// TABLICA MNOŽENJA OD 1 DO 10

echo '<table border = "1" cellpadding = "5">';
for ($i=1; $i <= 10; $i++) { //broj redaka
    echo '<tr>';
    for ($j=1; $j <= 10; $j++) { 
        
        echo '<td>'.$i*$j.'</td>'; // broj stupaca
    }
    '/tr';
}
echo '</table';

// while

$a = 1;
$b = 1;

