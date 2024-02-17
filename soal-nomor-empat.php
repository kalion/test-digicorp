<?php

$list_int = [];

for($i=0; $i<5; $i++) {
    $list_int[$i] = rand(100, 1000);
}

echo "List Integer\n";
var_dump($list_int);

rsort($list_int);
echo "List Integer Ngurut\n";
var_dump($list_int);

echo "Integer Kedua Terbesar";
echo " " . $list_int[1];

?>

