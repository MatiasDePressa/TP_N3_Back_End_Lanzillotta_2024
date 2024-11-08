<?php
include 'conectar_database.php';
include '../php/formulario_modificar_materia.php';

//recibe la conexion con el front-end
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //almecena el numero de la materia y la accion generada por los botones
    $numero_materia = $_POST['numero_materia'];
    $accion = $_POST['accion'];

    //hace una comparacion de valor y tipo para saber si el boton que se presiono fue modificar
    if ($accion === 'modificar') {

        //en ese caso almacena el dato que este en el nombre de la materia
        $nombre_materia = $_POST['nombre_materia'];
        
        // Verificar si se ha subido un archivo en el imput de logo materia y que no haya errores
        if (isset($_FILES['logo_materia']) && $_FILES['logo_materia']['error'] == UPLOAD_ERR_OK) {

            //almacena el logo de la materia y para que se guarde en la base de datos
            //se almacena tanto el directorio deseado del archivo como el nombre del archivo
            //asi en la base de datos se ve el path del archivo y se almacena la imagen el directorio deseado por separado
            //evitan problemas para el almacenaje de imagenes
            $logo_materia = $_FILES['logo_materia'];
            $nombre_archivo = basename($logo_materia['name']);
            $directorio_destino = '../img/' . $nombre_archivo;

            //si el movimiento del archivo cargado fue ejecutado correctamente
            if (move_uploaded_file($logo_materia['tmp_name'], $directorio_destino)) {
                // Prepara una consulta SQL para actualizar los campos 'nombre_materia' y 'logo_materia' en la tabla 'Materias'
                // donde 'numero_materia' coincide con el valor proporcionado.
                $sql = "UPDATE Materias SET nombre_materia = :nombre_materia, logo_materia = :logo_materia WHERE numero_materia = :numero_materia";

                // Prepara la sentencia SQL utilizando el objeto de base de datos.
                $stmt = $db->prepare($sql);

                // Vincula el valor de la variable PHP '$nombre_materia' al marcador ':nombre_materia' en la consulta SQL.
                // SQLITE3_TEXT indica que el valor es un texto.
                $stmt->bindValue(':nombre_materia', $nombre_materia, SQLITE3_TEXT);

                // Vincula el valor de la variable PHP '$directorio_destino' al marcador ':logo_materia' en la consulta SQL.
                // SQLITE3_TEXT indica que el valor es un texto.
                $stmt->bindValue(':logo_materia', $directorio_destino, SQLITE3_TEXT);

                // Vincula el valor de la variable PHP '$numero_materia' al marcador ':numero_materia' en la consulta SQL.
                // SQLITE3_INTEGER indica que el valor es un entero.
                $stmt->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);

                // Ejecuta la sentencia preparada.
                // La función 'execute' realiza la actualización en la base de datos.
                // La variable '$resultado' contendrá el resultado de la ejecución.
                $resultado = $stmt->execute();


                if ($resultado) {
                    echo "Los datos de la materia se actualizaron correctamente.";
                } else {
                    echo "Hubo un error al actualizar los datos.";
                }

                //ifs y elses en caso de que ocurriera algo con la consulta

            } else {
                echo "Hubo un error al subir el archivo.";
            }
        } else {
            echo "Hubo un error con la carga del archivo.";
        }

        //comparacion de tipo valor para el boton eliminar
    } elseif ($accion === 'eliminar') {

        // Prepara una consulta SQL para eliminar la fila de la tabla 'Materias'
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