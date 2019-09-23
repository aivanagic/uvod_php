<?php

function hr_dan(){

    $dan = date ('N');
    
    switch ($dan) {
        case '1':
            echo '<br> Danas je ponedjeljak :/';
            break;
        case '2':
            echo '<br> Danas je utorak :|';
            break;
        case '3':
            echo '<br> Danas je srijeda :)';
            break;
        case '4':
            echo '<br> Danas je četvrtak :))';
            break;
        case '5':
            echo '<br> Danas je petak ;)))';
            break;
        case '6':
            echo '<br> Danas je subota :)))';
            break;
        case '7':
            echo '<br> Danas je nedjelja :))';
            break;
        
        default:
            echo '<br> Danas ne postoji.';
            break;
    }

}

hr_dan();