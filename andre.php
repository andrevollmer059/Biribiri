<?php

$firstName = "ezequiel";
$lastName = "rubrica";
$age = "22";
echo "O sobrenome de $firstName é $lastName e ele tem $age anos de idade <br/>";

if ($firstName != $lastName){
    echo "Nome não é sobrenome";
} else {
    echo "Falso";
}

echo "<br/>";

$age2 = ($age >= 22) ? ($age = 22) : ($age <= 22);
echo "A idade dele é maior ou igual $age2 anos de idade <br/>";

