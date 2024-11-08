<?php
include 'Conectar_Database.php';
include '../php/Formulario_Modificar_Materia.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_materia = $_POST['numero_materia'];
    $accion = $_POST['accion'];

    if ($accion === 'modificar') {
        $nombre_materia = $_POST['nombre_materia'];
        
        // Verificar si se ha subido un archivo
        if (isset($_FILES['logo_materia']) && $_FILES['logo_materia']['error'] == UPLOAD_ERR_OK) {
            $logo_materia = $_FILES['logo_materia'];
            $nombre_archivo = basename($logo_materia['name']);
            $directorio_destino = '../img/' . $nombre_archivo;
            if (move_uploaded_file($logo_materia['tmp_name'], $directorio_destino)) {
                $sql = "UPDATE Materias SET nombre_materia = :nombre_materia, logo_materia = :logo_materia WHERE numero_materia = :numero_materia";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':nombre_materia', $nombre_materia, SQLITE3_TEXT);
                $stmt->bindValue(':logo_materia', $directorio_destino, SQLITE3_TEXT);
                $stmt->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);
                $resultado = $stmt->execute();

                if ($resultado) {
                    echo "Los datos de la materia se actualizaron correctamente.";
                } else {
                    echo "Hubo un error al actualizar los datos.";
                }
            } else {
                echo "Hubo un error al subir el archivo.";
            }
        } else {
            echo "Hubo un error con la carga del archivo.";
        }
    } elseif ($accion === 'eliminar') {
        $sql = "DELETE FROM Materias WHERE numero_materia = :numero_materia";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);

        $resultado = $stmt->execute();

        if ($resultado) {
            echo "La materia se eliminó correctamente.";
            // Actualizar las conexiones en la tabla CursoMateria
            $sqlActualiza = "UPDATE CursoMateria SET id_materia = 0 WHERE id_materia = :numero_materia";
            $stmtActualiza = $db->prepare($sqlActualiza);
            $stmtActualiza->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);
            $stmtActualiza->execute();
        } else {
            echo "Hubo un error al eliminar la materia.";
        }
    } else {
        echo "Acción no válida.";
    }
} else {
    echo "Solicitud no válida.";
}
?>
