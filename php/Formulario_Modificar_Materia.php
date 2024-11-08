<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación De Materias</title>
    <!-- enlazamos el formulario con su archivo de estilos -->
    <link rel="stylesheet" href="..\styles\formulario_modifica_materia.css">
</head>
<body>
    <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
    <!-- boton que nos lleva de nuevo al index -->
    <button id="volver" onclick="window.location.href='../index.php';">Volver</button>
    <center><h1>Modificación De Materias</h1></center>
    <div class="form-container">
        <!-- form que va a enviar los datos del formulario al back-end -->
        <form action="../scripts/modificar_materias.php" method="post" enctype="multipart/form-data">
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
                        <!-- inputs con pattern matching para validar que los datos sean los correctos -->
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
            <!-- Creacion de tres botones almacenados en un div, cada boton va a ejecutar una funcion diferente en el back-end -->
            <div class="buttons">
                <button type="submit" name="accion" value="modificar">Modificar Datos</button>
                <button type="reset" style="margin-left: 20px;">Limpiar datos</button> <!-- este boton solo limpia los inputs -->
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
