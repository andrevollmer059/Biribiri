<?php

$value = "5,99";
$product = "refrigerante";

$discount = $value - ($value* 10/100);
echo "Você terá um desconto de $discount reais";
echo "O valor total do $product será ($value - $discount)";