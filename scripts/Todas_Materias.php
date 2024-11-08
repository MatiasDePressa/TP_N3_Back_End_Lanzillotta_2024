<?php
include 'conectar_database.php';

//esta es una funcion que obtine mediante la conexion con la base de datos
//($db) el resultado de una query (consulta)
//en este caso obtiene de la tabla Materias el numero y nombre de la materia
//y de la tabla Curso el anio y la division
//mediante JOIN hace una union de las dos tablas mediante la tabla intermedia MateriasCurso
//finamente retorna el resultado de esta query y lo almacena en la variable $materias
function obtenerTodasLasMaterias($db) {
    $sql = "SELECT Materias.numero_materia, Materias.nombre_materia, Cursos.anio, Cursos.division
            FROM CursoMateria
            JOIN Materias ON CursoMateria.id_materia = Materias.id_materia
            JOIN Cursos ON CursoMateria.id_curso = Cursos.id_curso";

    $resultado = $db->query($sql);
    return $resultado;
}

$materias = obtenerTodasLasMaterias($db);