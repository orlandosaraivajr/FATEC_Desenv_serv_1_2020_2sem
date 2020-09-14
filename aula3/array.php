<?php
$var1 = 10;

$var2 = 4.5;

$array = [
    "foo" => "bar",
    "bar" => "foo",
    "melhor_professor" => "Orlando Saraiva",
];
echo gettype($var1);
echo '<br>';
echo gettype($var2);
echo '<br>';
echo gettype($array);

echo '<br><br>';
var_dump($array);

echo '<br><br>';
echo $array["melhor_professor"];
?>