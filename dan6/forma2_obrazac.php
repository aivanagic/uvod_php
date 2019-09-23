
<!-- ovdje samo HTML forma, koja poziva obrazac nakon klika na submit-->
<form method="POST" action="forma2_obrada.php"> <!-- action služi za pozivanje php skripte, ako ga nema onda pretpostavlja da se nalazi u ovom file-u-->
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