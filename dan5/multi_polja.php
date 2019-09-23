<?php

$korisnik1 = array('ime' => 'Ivo', 'prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');
$korisnik2 = array('ime' => 'Ante', 'prezime' => 'Perić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik3 = array();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';

$korisnici = array($korisnik1, $korisnik2, $korisnik3);

// pridruživanje podataka u indeks 4
$korisnici[4]['ime'] = 'Iva';
$korisnici[4]['prezime'] = 'Ivić';
$korisnici[4]['dob'] = '44';
$korisnici[4]['mjesto'] = 'Zagreb';

echo '<pre>';
print_r($korisnici);
echo '</pre>';

$rb = 0;

foreach ($korisnici as $korisnik) {
    echo '<br>';
    $rb++;
    foreach ($korisnik as $key => $value) { //$korisnik as $value
        if ($key == 'prezime') { // dohvati samo prezime
            echo 'Prezime korisnika sa rednim brojem '.$rb.' je '.$value;
            echo '<br>';
        }
        //echo $value.'<br>';
    }
}


//var_dump($korisnici[0]['ime']);

?>

