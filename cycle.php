<?php
$colors = array("red", "green", "blue", "yellow");
$color = array("қызыл", "жасыл", "көк", "сары");
for ($i = 0; $i < count($color); $i++) {
    echo $color[$i];
    if ($i < count($color) - 1) {
        echo " ";
    }
}