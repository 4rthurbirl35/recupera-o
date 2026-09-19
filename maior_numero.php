<?php
$n1 = 5;
$n2 = 8;
$n3 = 10;

if ($n1 > $n2 && $n1 > $n3) {
    echo "o maior numero é: ".$n1;
}

if ($n2 > $n1 & $n2 > $n3) {
    echo "o maior numero é: ".$n2;
}

else {
    echo "o maior numero é: ".$n3;
}
