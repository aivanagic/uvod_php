<?php
// 


if (isset($_POST['submit'])) {
   echo "Ime: $_POST[ime]<br>";
   echo "Ime: $POST[prezime]<br>";
}else{
    header('Location:forma3.php');
}