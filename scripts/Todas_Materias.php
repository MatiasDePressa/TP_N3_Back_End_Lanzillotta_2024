<?php
include 'Conectar_Database.php';

function obtenerTodasLasMaterias($db) {
    $sql = "SELECT Materias.numero_materia, Materias.nombre_materia, Cursos.anio, Cursos.division
            FROM CursoMateria
            JOIN Materias ON CursoMateria.id_materia = Materias.id_materia
            JOIN Cursos ON CursoMateria.id_curso = Cursos.id_curso";

    $resultado = $db->query($sql);
    return $resultado;
}

$materias = obtenerTodasLasMaterias($db);