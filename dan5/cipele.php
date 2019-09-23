<?php



$gucci = array('velicina' => 35, 'boja' => 'smeđa', 'materijal' => 'koža');
$adidas = array('velicina' => 34.5, 'boja' => 'bijela', 'materijal' => 'goretex');
$vans = array('velicina' => 36, 'boja' => 'plava', 'materijal' => 'tekstil');

$cipele = array($gucci, $adidas, $vans);

echo '<pre>';
print_r($cipele);
echo '</pre>';

// može i ovako:
$cipele = array(
    'Gucci' => ['velicina' => 34, 'boja' => 'smeđa', 'materijal' => 'koža'],
    'Adidas' => ['velicina' => 28, 'boja' => 'bijela', 'materijal' => 'tekstil'],
    'Puma' => ['velicina' => 38, 'boja' => 'plava', 'materijal' => 'brušena koža'],
    'Nike' => ['velicina' => 40, 'boja' => 'žuta', 'materijal' => 'koža'],
)

// ovako se uobičajeno koristi
//     0 => ['ime' => 'Gucci','velicina' => 34, 'boja' => 'smeđa', 'materijal' => 'koža'],


?>