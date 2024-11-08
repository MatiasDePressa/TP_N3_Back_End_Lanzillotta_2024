<?php

include 'Conectar_Database.php';
include '../php/Formulario_Modificar_Materia.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre_materia = $_POST['nombre_materia'];
    $numero_materia = $_POST['numero_materia'];
    $logo_materia = $_POST['logo_materia'];

    // Aquí puedes hacer algo con los datos, como guardarlos en una base de datos
    echo "Nombre: " . htmlspecialchars($nombre_materia) . "<br>";
    echo "Numero: " . htmlspecialchars($numero_materia) . "<br>";
    echo "Logo: " . htmlspecialchars($logo_materia) . "<br>";
}

?>