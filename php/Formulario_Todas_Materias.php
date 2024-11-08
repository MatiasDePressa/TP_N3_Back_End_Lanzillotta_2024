<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias</title>
    <link rel="stylesheet" href="../styles/TodasMaterias.css">
</head>
<body>
    <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
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
                <?php
                include '../scripts/Todas_Materias.php';
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
        <center><p><b>Total de materias: <span><?php echo $contador; ?></span></b></p></center>
    </form>

    <footer>
        <hr>
        <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
        <p>Proyecto de Implementación de sitios web dinámicos</p>
        <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
    </footer>
</body>
</html>