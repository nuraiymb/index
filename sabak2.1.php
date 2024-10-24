<?php
$a = readline( prompt: 'a:');
$b = readline( prompt: 'b:');

if ($a < $b) {
    echo "а кіші b дан\n";
} else if ($a > $b) {
    echo "a үлкен b дан";
} else echo "equal";
