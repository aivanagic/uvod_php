<?php

// include - uključi dokument - samo javlja grešku ako dokument nije pronađen
// requiere - uključi dokument - baca fatalnu grešku tj. zaustavlja izvođenje aplikacije
//češće se koristi REQUIERE


require 'cipele.php';// uključuje neku drugu skriptu (dokument) u ovu skriptu

echo '<pre>';
print_r($cipele);
echo '</pre>';

?>

<table border=1>
    <tr>
        <th>Marka</th>
        <?php
            $counter = 0;
            foreach ($cipele as $key => $cipela) {// Gucci, Adidas... 
               foreach ($cipela as $key => $value) {//velicina, boja, materijal
                    if ($counter == 1) {
                        break 2;
                    }
                    echo "<th>$key</th>";
               }
               $counter++;
            }
        ?>
    </tr>
    <?php
    foreach ($cipele as $marka => $cipela) {//$key je mogao biti $marka, $value kao $atribut
            echo '<tr>';
                echo "<td>$marka</td>"; // ispisuje marku
                echo "<td>$cipela[velicina]</td>";
                echo "<td>$cipela[boja]</td>";
                echo "<td>$cipela[materijal]</td>";
                /* radi isto kao linije 36-38
                foreach ($value as $key => $value) {
                    echo "<td>$value</td>"; // ispisuje atribute svake marke
                }
                */
            echo '</tr>';
        }
    ?>

</table>