<?php

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo gettype($array);

echo '<br><br>';
var_dump($array);

echo '<br><br>';
echo $array["foo"];
?>