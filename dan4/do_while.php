<?php

$a = 1;

// Do WHILE PETLJA (prvo napravi pa provjeri uvjet)

do{ // izvršit će se barem jednom prije provjere uvjeta
    echo $a.'<br>';
    $a++;
}while($a <= 10);

echo $a; // $a je nakon petlje 11

$b = 1;
echo '<table border = "1">';
do{ // ponavljamo table row i table data da se automatski dodaje u petlji
    echo    '<tr> 
                <td>'.$b.'</td> 
                <td>Hello!</td>
            </tr>'; // $b u 18. retku (<td>'.$b.'</td> ) uvećava vrijednost u ćelijiama u prvom stupcu do 10
    echo $b++;
}while($b <= 10);

echo '</table>';