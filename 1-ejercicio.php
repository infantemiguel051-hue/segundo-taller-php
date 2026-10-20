<?php
// 1. Fizz - buzz:
// Escribe un programa que muestre los números de 1 a 100 (ambos incluidos y con
// un salto de línea entre cada impresión), sustituyendo los siguientes:
// * Múltiplos de 3 por la palabra fizz;.
// * Múltiplos de 5 por la palabra buzz;.
// * Múltiplos de 3 y de 5 a la vez por la palabra fizz-buzz

$i = 1;
$div3 = "fizz";
$div5 = "buzz";

for ($i; $i <= 100; $i++) {

    if ($i % 5 == 0 && $i % 3 == 0) {
        echo "$div3-$div5 <br>";
    } else if ($i % 3 == 0) {
        echo "$div3 <br>";
    } else if ($i % 5 == 0) {
        echo "$div5 <br>";
    } else {
        echo "$i <br>";
    }
}
