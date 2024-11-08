<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación De Materias</title>
    <link rel="stylesheet" href="..\styles\ModificaMateria.css">
</head>
<body>
    <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
    <center><h1>Modificación De Materias</h1></center>
    <div class="form-container">
        <form action="../scripts/Modificar_Materias.php" method="post" enctype="multipart/form-data">
            <table>
                <caption>Datos de la Materia</caption>
                <thead>
                    <tr>
                        <th>Número de Materia</th>
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
                            <input type="text" id="nombre_materia" name="nombre_materia" maxlength="50" pattern="[a-zA-Z\s]+">
                        </td>
                        <td><label for="logo_materia">Logo de la Materia</label>
                            <input type="file" id="logo_materia" name="logo_materia" accept="image/*">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="buttons">
                <button type="submit" name="accion" value="modificar">Modificar Datos</button>
                <button type="reset" style="margin-left: 20px;">Borrar datos</button>
                <button type="submit" name="accion" value="eliminar" style="margin-left: 20px;">Eliminar Materia</button>
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
        <p>Proyecto de Implementación de sitios web dinámicos</p>
        <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
    </footer>
</body>
</html>
