<?php 

function soma($variavel_1, $variavel_2) {
    // echo gettype($variavel_1);
    // echo gettype($variavel_2);
    if(gettype($variavel_1) == 'integer' && gettype($variavel_2) == 'integer' ){
        $soma = $variavel_1 + $variavel_2;
    }elseif (gettype($variavel_1) == 'double' && gettype($variavel_2) == 'double' ) {
        $soma = $variavel_1 + $variavel_2;
    } else {
        $soma = 'Não foi possível somar';
    }
    return $soma;
}


$num1 = 10;
$num2 = 5;
echo soma($num1, $num2);
echo '<br>';
$num1 = 10.6;
$num2 = 5.2;
echo soma($num1, $num2);

echo '<br>';
$num1 = 'oi';
$num2 = 'mundo';
echo soma($num1, $num2);

echo '<br>';
$num1 = 10;
$num2 = 'mundo';
echo soma($num1, $num2);
?>