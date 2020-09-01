<?php 

# https://www.php.net/manual/en/function.is-numeric.php
# https://www.php.net/manual/en/function.doubleval.php

function soma($variavel_1, $variavel_2) {
    if (is_numeric($variavel_1) && is_numeric($variavel_2)) {
        $n1 = doubleval($variavel_1);
        $n2 = doubleval($variavel_2);
        $soma = $n1 + $n2;
        return $soma;
    } else {
        return 'Não foi possível somar: ';
    }
}

$num1 = 10;
$num2 = 5;
echo soma($num1, $num2);
echo '<br>';
$num1 = 10.6;
$num2 = 5.2;
echo soma($num1, $num2);

echo '<br>';
$num1 = 10.6;
$num2 = 5;

echo soma($num1, $num2);

echo '<br>';
$num1 = 10;
$num2 = 'mundo';
echo soma($num1, $num2);

echo '<br>';
$num1 = [
    "foo" => "bar",
    "bar" => "foo",
    "melhor_professor" => "Orlando Saraiva",
];
$num2 = [
    "teste" => "teste1",
    "teste2" => "teste3"
];
$num3 = $num1 + $num2;
print_r($num3);
echo '<br>';
echo soma($num1, $num2);
?>