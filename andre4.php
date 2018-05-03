<?php

$int = 3;
$string = "3";
$real = "3,3";
$string2 = "andre";

if ($string == $string2){
    echo "São iguais";
} else {
    echo "Não são iguais";
}
echo "<br/>";

if ($int == $string){
    echo "São os mesmos números";
} else {
    echo "Não são os mesmos números";
}

echo "<br/>";

if ($string != $real){
    echo "Números não pertencem à mesma classe";
} else {
    echo "Não são diferentes";
}
echo "<br/>";

$value =($string + $int + $real) /2;
echo "A soma dos números, divididos por '2' é igual a $value <br/>";

$status = ($value /2) + $int;
echo "$status <br/>";

$firstTest = ($value + $status >= 9) ? "Você passou" : "Você não passou";
echo "$firstTest <br/>";
