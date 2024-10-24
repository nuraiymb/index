<?php
echo "Файлдың аты: " . basename(__FILE__) . "\n";
function myFunction()
{
    echo "Hello World!";
}
myFunction();

function getInfo($name, $age)
{
    echo "$name,$age\n";
}

$name = "Nurai";
$age = 22;
$info =  getInfo($name, $age);

echo $info . "\n";

