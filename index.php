<?php
class basededatos extends SQLite3 {
    public function __construct() {
        $this->open('.\test.sqlite');
    }
}

$db = new basededatos();

if ($db) {
    echo "<p>Se accedió exitosamente a la base de datos</p>";

    // Consulta para obtener los nombres de todas las tablas
    $consulta = "SELECT name FROM sqlite_master WHERE type='table'";
    $resultado = $db->query($consulta);

    if ($resultado) {
        echo "<h2>Tablas en la base de datos y su contenido:</h2>";

        // Recorrer los nombres de las tablas y mostrar su contenido
        while ($fila = $resultado->fetchArray(SQLITE3_ASSOC)) {
            $nombreTabla = $fila['name'];
            echo "<h3>Tabla: $nombreTabla</h3>";
            
            // Consulta para obtener el contenido de cada tabla
            $consultaContenido = "SELECT * FROM $nombreTabla";
            $resultadoContenido = $db->query($consultaContenido);

            echo "<table border='1'><tr>";
            
            // Mostrar los nombres de las columnas
            $columnas = $db->query("PRAGMA table_info($nombreTabla)");
            $columnNames = [];
            while ($columna = $columnas->fetchArray(SQLITE3_ASSOC)) {
                echo "<th>" . $columna['name'] . "</th>";
                $columnNames[] = $columna['name'];
            }
            echo "</tr>";

            // Mostrar cada fila de datos
            while ($filaContenido = $resultadoContenido->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                foreach ($columnNames as $columna) {
                    echo "<td>" . $filaContenido[$columna] . "</td>";
                }
                echo "</tr>";
            }

            echo "</table><br>";
        }
    } else {
        echo "<p>No se encontraron tablas en la base de datos.</p>";
    }
} else {
    echo "<p>Error al acceder a la base de datos</p>";
}

// Cerrar la conexión
$db->close();
?>
