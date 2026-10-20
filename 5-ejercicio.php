<form action="" method="post">
    <label for="anio">Ingrese el año:</label>
    <input type="text" name="anio" required>
    <br><br>
    <label for="mes">Ingrese el número del mes (ej, 01):</label>
    <input type="text" name="mes" required>
    <br><br>
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php
// 5. Crea una función que sea capaz de detectar si existe un viernes 13 en el mes y el
// año indicados. La función recibirá el mes y el año y retornará verdadero o falso,
// imprime en pantalla si es viernes 13 o no.

function esViernes13($mes, $anio)
{

    if ($mes < 1 || $mes > 12) { //Si el mes es menor a 1 o mayor a 12, devolvemos "error"
        return "error";
    }

    $fecha13 = "$anio-$mes-13"; // Armamos la fecha exacta del día 13 para ese mes y año

    $nombreDia = date('l', strtotime($fecha13)); // Obtenemos el nombre del día de la semana (en inglés: Friday, Monday, etc.)

    if ($nombreDia == 'Friday') {  // Evaluamos si es viernes y retornamos true o false
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['enviar'])) {
    $anioIngresado = $_POST['anio'];
    $mesIngresado = $_POST['mes'];

    $resultado = esViernes13($mesIngresado, $anioIngresado);     // Llamamos a la función y guardamos el resultado (true o false)

    if ($resultado === "error") {
            echo "<h3> Error: Ingresa un mes válido entre 1 y 12.</h3>";
        }
    // Imprimimos en pantalla dependiendo de si es verdadero o falso
    else if ($resultado == true) {
        echo "El mes $mesIngresado del año $anioIngresado SÍ tiene un Viernes 13.";
    } else {
        echo "El mes $mesIngresado del año $anioIngresado NO tiene un Viernes 13.";
    }
}
