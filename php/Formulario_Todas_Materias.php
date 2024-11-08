<!--Creamos un formulario para poder ver una tabla con todas las materias cargadas-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias</title>
    <!--En lazamos los estilos de la pagina con el archivo css-->
    <link rel="stylesheet" href="../styles/formulario_todas_materias.css">
</head>

<body>
    <header>
        <!--colocamos la imagen del fondo, almacenada en el directorio img-->
        <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
        <!--creamos un boton "volver" que al presionarlo te envia de vuelta al index-->
        <button id="volver" onclick="window.location.href='../index.php';">Volver</button>
    </header>
    <main>
        <!--tag form para enviar los datos al back-end-->
        <form method="post">
            <table>
                <caption>Listado de las Materias</caption>
                <thead>
                    <tr>
                        <th>Nro de Materia</th>
                        <th>Nombre de Materia</th>
                        <th>Año</th>
                        <th>División</th>
                    </tr>
                </thead>
                <tbody>
                    <!--llamamos al archivo en el directorio scripts que maneja la logica
                    y la algoritmia de esta seccion del programa, este archivo nos devuelve
                    los datos almacenados en la base de datos como una lista y mediante un while,
                    los colocamos en el formulario, y sumamos uno al contador -->
                    <?php
                    include '../scripts/todas_materias.php';
                    $contador = 0;
                    while ($fila = $materias->fetchArray(SQLITE3_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($fila['numero_materia']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['nombre_materia']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['anio']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['division']) . "</td>";
                        echo "</tr>";
                        $contador++;
                    }
                    
                    ?>
                </tbody>
            </table>
            <!--Mostramos un mensaje con el total del contador-->
            <center>
                <p><b>Total de materias: <span><?php echo htmlspecialchars($contadorMaterias); ?></span></b></p>
            </center>
        </form>
    </main>

    <footer>
        <hr>
        <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
        <p>Proyecto de Implementación de sitios web dinámicos</p>
        <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
    </footer>
</body>

</html>