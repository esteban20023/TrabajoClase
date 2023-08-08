<?php
// Definir una matriz con las calificaciones de los estudiantes
$calificaciones = array(
    "Juan" => array(85, 92, 78),
    "María" => array(90, 88, 94),
    "Pedro" => array(75, 82, 70),
);

// Calcular los promedios de cada estudiante y almacenarlos en una nueva matriz
$promedios = array();

foreach ($calificaciones as $estudiante => $notas) {
    $promedio = array_sum($notas) / count($notas);
    $promedios[$estudiante] = $promedio;
}

// Imprimir los promedios de los estudiantes
foreach ($promedios as $estudiante => $promedio) {
    echo "$estudiante: Promedio = $promedio<br>";
}
?>