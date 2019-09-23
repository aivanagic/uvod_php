<?php

// echo $GLOBALS; //ne radi!

echo '<pre>';
//print_r($_SERVER['SERVER_NAME']);//pozivamo naziv servera kao string
echo '</pre>';

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

echo '<pre>';
print_r($_GET);
echo '</pre>';

echo '<pre>';
print_r($_POST);
echo '</pre>';