

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