<?php
$ime = 'Aleksandar';
$prezime = 'Dobrinić';
?>

<table border="1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>

    </tr>
    <tr>
        <td><?php echo $ime;?></td>
        <td><?php echo $prezime;?></td>
    </tr>
    <tr>
        <td>Marko</td>
        <td>Marić</td>
    </tr>

</table>

<?php

echo
<table border="1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
    </tr>
    <tr>
        <td>$ime></td>
        <td>$prezime</td>
    </tr>
    <tr>
        <td>Marko</td>
        <td>Marić</td>
    </tr>

</table>;
?>

