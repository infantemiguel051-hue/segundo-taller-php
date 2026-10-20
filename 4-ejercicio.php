<form action="" method="post">
    <label for="url">Ingrese la URL:</label>
    <input type="text" name="url" required>
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php
//https://ejemplourl.com?year=2023&challenge=0

function obtenerValores(string $url)
{
    $partesUrl = explode('?', $url); //tomamos la URL y la dividimos en arrays por medio del "?" para que separe los datos de clave-valor que hay 
    $soloParametros = $partesUrl[1]; // Aquí le decimos que solo muestre el array en la posición 1 por lo que queda solo: "year=2023&challenge=0" 

    $parametros = explode('&', $soloParametros); //acá vamos a Separar cada parámetro usando el '&'

    echo "<h3 style= 'color: blue; font-size: 20px'>Valores encontrados:</h3>";

    $contador = 1; //sirve para mostrar de una forma mas ordenadas la cantidad de valores que tiene la URL

    foreach ($parametros as $param) {   // Recorremos ese "Array" mostramos cada valor directamente con echo
        $valor = explode('=', $param)[1]; //acá decimos que solo guarde el array de la poscición 1 o sea despues del igual
        echo "valor $contador :  $valor <br>"; //imprime cada uno de los valores encontrados
        $contador++; //le va sumando de uno en uno al valor para que se vea ordenado
    }
}

if (isset($_POST['enviar'])) { //verificamos que ya se haya echo clic en el botón de enviar
    $urlIngresada = $_POST['url']; //guardamos en este caso la URL completa que el usuario ingresó
    obtenerValores($urlIngresada);     // Llamamos a la función (como ya se hace vel echo adentro, solo la ejecutamos)
}
