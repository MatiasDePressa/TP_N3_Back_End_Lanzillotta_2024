<!--Archivo Index: que nos permite, al ingresar en el directorio (la carpeta o la ubicacion
del archivo), poder seleccionar a que archivo dirigirnos-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--Enlazamos el estilo de la pagina al archivo index.css en el directorio styles-->
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <header>
        <h1>Página Principal</h1>
    </header>
    <main>
        <!--Foto del fondo-->
        <img src="img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
        <!--Creamos un nav para contener una lista de enlaces-->
        <nav>
            <ul>
                <!--al hacer click en cualquiera de los dos textos nos dirigiremos a el archivo
                seleccionado debido al href (un hipervinculo)-->
                <li><a href="php/Formulario_Todas_Materias.php">Ver Todas las Materias</a></li>
                <li><a href="php/Formulario_Modificar_Materia.php">Modificar Materia</a></li>
            </ul>
        </nav>
    </main>

    <footer>
        <hr>
        <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
        <p>Proyecto de Implementación de sitios web dinámicos</p>
        <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
    </footer>
</body>

</html>