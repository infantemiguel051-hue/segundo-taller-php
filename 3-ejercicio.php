<?php

// 3. Simular una base de datos mediante un array asociativo el cuál debe contener 5
// instancias, cada una debe contener como mínimo 5 datos. Posteriormente recorrer
// el arreglo para mostrar la información en pantalla utilizando el formato de php en
// HTML.

$estudiantes = [
    [
        "nombre" => "Juan",
        "apellido" => "Pérez",
        "edad" => 20,
        "curso" => "ADSO",
        "jornada" => "Mañana"
    ],
    [
        "nombre" => "Daniela",
        "apellido" => "Gualrón",
        "edad" => 23,
        "curso" => "Enfermería",
        "jornada" => "Mañana"
    ],
    [
        "nombre" => "Daniel",
        "apellido" => "Sanchez",
        "edad" => 19,
        "curso" => "Salud Pública",
        "jornada" => "Tarde"
    ],
    [
        "nombre" => "Manuel",
        "apellido" => "Patarroyo",
        "edad" => 27,
        "curso" => "Contabilidad",
        "jornada" => "Noche"
    ],
    [
        "nombre" => "Oscar",
        "apellido" => "Beltrán",
        "edad" => 21,
        "curso" => "AIPI",
        "jornada" => "Tarde"
    ]
];

echo "<pre>";
var_dump($estudiantes);
echo "</pre>";

foreach ($estudiantes as $estudiante) {
?>
    <ul class="lista" ;>
        <li>
            <p> <span>Nombre del estudiante:</span> <?php echo $estudiante["nombre"]; ?> </p>
        </li>
        <li>
            <p> <span>Apellido del estudiante:</span> <?php echo $estudiante["apellido"]; ?> </p>
        </li>
        <li>
            <p> <span>Edad del estudiante:</span> <?php echo $estudiante["edad"] . " años"; ?> </p>
        </li>
        <li>
            <p> <span>Programa que cursa:</span> <?php echo $estudiante["curso"]; ?> </p>
        </li>
        <li>
            <p> <span>Jornada en que estudia el estudiante:</span> <?php echo $estudiante["jornada"]; ?> </p>
        </li>
    </ul> <br>
    <style>
        .lista p {
            color: blue;
            font-family: calibri;
            font-size: 15px;
        }

        .lista span {
            color: black;
            font-weight: bold;
        }
    </style>

<?php
}
