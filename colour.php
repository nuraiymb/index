<?php

$color = readline( 'сфетовор түсін енгіз: ');

switch ($color) {
    case "red":
        echo "тоқта";
        break;
    case  "yellow":
        echo 'дайындал';
        break;
    case  "green":
        echo 'жүре беріңіз';
        break;
    default:
        echo "404";
}

