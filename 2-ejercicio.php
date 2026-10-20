<form action="" method="post">
    <label for="frase"> Escriba la frase</label>
    <input type="text" name="frase">
    <input type="submit" value="Envar" name="enviar">
</form>

<?php

$letras = [
    "a" => "4",
    "b" => "I3",
    "c" => "[",
    "d" => ")",
    "e" => "3",
    "f" => "|=",
    "g" => "&",
    "h" => "#",
    "i" => "1",
    "j" => ",_|",
    "k" => ">|",
    "l" => "1",
    "m" => "/\/\\",
    "n" => "^/",
    "o" => "0",
    "p" => "|*",
    "q" => "(_,)",
    "r" => "I2",
    "s" => "5",
    "t" => "7",
    "u" => "(_)",
    "v" => "\/",
    "w" => "\/\/",
    "x" => "><",
    "y" => "j",
    "z" => "2",
    " " => " "
];
if (isset($_POST['enviar'])) { //validamos que haya una frase para enviarla 
    $frase = $_POST['frase']; //sirve para traer la frase ingresada por detras para mno modificar la URL
    $frase = strtolower($frase); //convierte todas las mayúsculas en minusculas para que no hayan errores al momento de imprimir 
    $convertir = str_split($frase); // sepera la frase ingresada letra por letra para poder realizar la conversión
    foreach ($convertir as $conv) { //se hace un alias para que recorra toda la frase y revise letra por letra
        echo "$letras[$conv]"; //se imprime una por una las letras reemplazandolas por el caracter específico de esa letra
    }
}
