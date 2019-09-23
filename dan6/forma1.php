<form method="POST" action=""> <!-- action služi za pozivanje php skripte, a ko ga nema onda pretpostavlja da se nalazi u ovom file-u-->
    <p>
        </label for="ime">Ime:</label>
        <input type="text" name="ime">
    </p>
    <p>
        </label for="prezime">Prezime:</label>
        <input type="text" name="prezime">
    </p>
    <p>
        <input type="submit" name="submit" value="Pošalji">
    </p>
</form>

<?php

// gledamo sadržaj super globalne varijable POST
echo '<pre>';
print_r($_POST);
echo '</pre>';

if (isset($_POST['submit'])) {// provjeravamo je li netko kliknuo na gumb
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if (!empty($_POST['ime']) && !empty($_POST['prezime'])){
        echo "Ime: $_POST[ime].<br>";
        echo "Prezime: $_POST[prezime].<br>";
    }else{
        echo 'Popunite sva polja!';
    }
}