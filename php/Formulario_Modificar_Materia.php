<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion De Materias</title>
    <link rel="stylesheet" href="..\styles\ModificaMateria.css">
</head>
<body>
    <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
    <h1>Modificacion De Materias</h1>
    <div class="form-container">
    <form action="../scripts/ModificarMaterias.php" method="post">
            <table>
                <caption>
                    Datos de la Materia
                </caption>
                <thead>
                    <tr>
                        <th>Numero de Materia</th>
                        <th>Nombre de Materia</th>
                        <th>Logo de la Materia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label for="numero_materia">Número de Materia</label>
                            <input type="text" id="numero_materia" name="numero_materia" maxlength="3" pattern="\d{1,3}" required>
                        </td>
                        <td><label for="nombre_materia">Nombre de Materia</label>
                            <input type="text" id="nombre_materia" name="nombre_materia" maxlength="50" pattern="[a-zA-Z\s]+" required>
                        </td>
                        <td><label for="logo_materia">Logo de la Materia</label>
                            <input type="file" id="logo_materia" name="logo_materia" accept="image/*" required>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="buttons">
                <button type="submit">Modificar Datos</button>
                <button type="reset" style="margin-left: 20px;">Borrar datos</button>
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
        <p>Proyecto de Implementación de sitios web dinámicos</p>
        <p>Autores: Alarcon - Baez - Cabrera - Iacobacci - Cajal - Cari - Casagerone - Castellano - Corbalan - Cuba - Datri - Dangelo - De pressa - Dicerbo - Dominguez - Donnarumma - Eiras - Francisco - Gallardo - Garcia - Iannone - Ledesma - Leyes - Lezcano - ;Loiacono - Lucero - Lujan - Luque - Marrapodi - Matos - Mosquera - Pavon - Portillo - Potaschnik - Romero - Salmeron - Scaramuzza - Sebriano A. - Sebriano E. - Speranza</p>
    </footer>

    <script src="../scripts/ValidacionesMateria.js"></script>
</body>
</html>