<?php

$korisnik1 = array('ime' => 'Ivo', 'prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');
$korisnik2 = array('ime' => 'Ante', 'prezime' => 'Perić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik3 = array();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';

// prolazi kroz atribute (npr. ime, prezime...) nekog objekta 
foreach ($korisnik1 as $kljuc => $podatak_o_korisniku) { // može i bez ključa $ključ pa će ispisivati samo vrijednost
    echo "$kljuc -> $podatak_o_korisniku <br>";
}

foreach ($korisnik2 as $kljuc => $podatak_o_korisniku) {
    if ($kljuc == 'prezime') {
        echo $podatak_o_korisniku;
    }
}
echo '<pre>';
print_r($korisnik1);
echo '</pre>';

?>


<table width="50" border = "1">
    <!-- ZAGLAVLJE TABLICE-->
    <tr>
        <?php
            foreach ($korisnik3 as $key => $value):// može umjesto : vitičasta zagrada
        ?>
        <th>alex</th>
        <?php
            endforeach;// može umjesto 
        ?>
    </tr>
    <!-- PODACI O KORISNIKU-->
    <tr>
        <td><?php echo $korisnik3['ime'] ?></td>
        <td><?php echo $korisnik3['prezime'] ?></td>
        <td><?php echo $korisnik3['dob'] ?></td>
        <td><?php echo $korisnik3['mjesto'] ?></td>
    </tr>
    <tr>
        <td><?php echo $korisnik2['ime'] ?></td>
        <td><?php echo $korisnik2['prezime'] ?></td>
        <td><?php echo $korisnik2['dob'] ?></td>
        <td><?php echo $korisnik2['mjesto'] ?></td>
    </tr>
</table>