<?php

// isto kao drugi primjer u 
for ($i=0; $i < 10; $i++) { 
    echo '<br>';
    for ($j=1; $j <= 10; $j++) { 
        
        if ($j == 8){
            //continue; // nemoj izvršiti ništa nakon continue do kraja petlje tj. vrati se natrag na početak unuturanje petlje
            continue 2; // nemoj izvršiti ništa nakon continue do kraja petlje vrati se na početak vanjske petlje
        }
        echo ' '.$j; // nedostaje '8' u ispisu zbog continue
    }
    echo '<br>';
}