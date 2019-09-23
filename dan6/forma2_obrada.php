
<?php
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
}else{
    // ne želimo da se izravno može otvoriti forma2_obrada.php prije submitanja na obrascu
    header('Location:forma2_obrazac.php');
}