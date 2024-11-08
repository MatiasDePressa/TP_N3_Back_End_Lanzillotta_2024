# Trabajo Practico N°3: Back-End

*Trabajo Desarrollado Por Agustin Sebriano, Emanuel Sebriano, Nueheun Matos y Matias De Pressa, Estudiantes de 7°4° Modalidad Programacion, Turno Noche, Ciclo Lectivo 2024, Profesor Profesor Hernán Lanzillotta. Como Proyecto final de la materia Proyecto de Implementación de sitio web dinamico*



>[!WARNING]
>En caso de Error al tratar de ejecutar el programa (Fatal error: Uncaught Error: Class "SQLite3" not found)
>ir a [Como activar SQLite3 en Apache](#Como-activar-SQLite3-en-Apache)



## Indice:
- [Trabajo Practico N°3: Back-End](#trabajo-practico-n3-back-end)
  - [Indice:](#indice)
  - [Descripcion](#descripcion)
    - [Propósitos:](#propósitos)
  - [Manual de usuario](#manual-de-usuario)
    - [Como ejecutar el programa](#como-ejecutar-el-programa)
    - [Como activar SQLite3 en Apache](#como-activar-sqlite3-en-apache)
    - [Como ver la base de datos](#como-ver-la-base-de-datos)
  - [Funcionamiento del programa](#funcionamiento-del-programa)
    - [**Materias.sqlite**](#materiassqlite)
    - [**conectar\_database.php**](#conectar_databasephp)
    - [**index.php**](#indexphp)
    - [formulario\_todas\_materias.php](#formulario_todas_materiasphp)
    - [formulario\_modificar\_materia.php](#formulario_modificar_materiaphp)
    - [todas\_materias.php](#todas_materiasphp)
    - [modificar\_materias:](#modificar_materias)
    - [Flujo de archivos](#flujo-de-archivos)
  - [Tecnologias](#tecnologias)
    - [Tecnologias Utilizadas:](#tecnologias-utilizadas)
      - [1. **HTML (Hypertext Markup Language)**](#1-html-hypertext-markup-language)
      - [2. **CSS (Cascading Style Sheets)**](#2-css-cascading-style-sheets)
      - [3. **PHP (Hypertext Preprocessor)**](#3-php-hypertext-preprocessor)
      - [4. **SQLite**](#4-sqlite)
      - [5. **Apache**](#5-apache)



---



## Descripcion

El programa está diseñado para gestionar la información de materias y cursos en la escuela. Permite a los usuarios visualizar todas las materias disponibles, modificar los datos de las materias y eliminar materias de la base de datos. 

### Propósitos:
- **Visualización**: Mostrar todas las materias disponibles en una tabla para consulta rápida.
- **Modificación**: Permitir la actualización de la información de las materias, incluyendo el nombre y el logo.
- **Eliminación**: Facilitar la eliminación de materias, manejando correctamente las conexiones con los cursos.

Este sistema es útil para mantener actualizada la información académica, asegurando que los cambios se reflejen de manera consistente en la base de datos escolar. Es una herramienta esencial para la administración eficiente de cursos y materias en un entorno educativo.



---



## Manual de usuario

### Como ejecutar el programa


1. Configuración del Entorno
- **Servidor Web**: Asegúrate de tener instalado un servidor web como XAMPP o WAMP que soporte PHP y SQLite.
- **Directorio de Trabajo**: Coloca todos los archivos del programa en el directorio raíz del servidor web. Por ejemplo, si usas XAMPP, podrías colocarlos en `C:\xampp\htdocs\Raiz`.


2. Iniciar el Servidor
- **XAMPP**: Abre el panel de control de XAMPP y asegúrate de que el servidor Apache esté corriendo.
- **WAMP**: Abre WAMP y asegúrate de que el servidor esté activo.


3. Acceder al Programa
- **Página Principal**: Abre tu navegador web y accede a `http://localhost/Raiz/index.php`.
- **Ver Todas las Materias**: En la página principal, haz clic en "Ver Todas las Materias" para visualizar todas las materias.
- **Modificar Materia**: En la página principal, haz clic en "Modificar Materia" para modificar los datos de una materia específica.


4. Modificar y Eliminar Materias
- **Modificar**:
  1. Ingresa el número de la materia que deseas modificar.
  2. Proporciona el nuevo nombre y logo de la materia.
  3. Haz clic en "Modificar Datos" para actualizar la información en la base de datos.
  

- **Eliminar**:
  1. Ingresa el número de la materia que deseas eliminar.
  2. Haz clic en "Eliminar Materia" para borrar la materia de la base de datos y actualizar las conexiones.


5. Notas Finales
- **Permisos**: Asegúrate de que los directorios tengan los permisos adecuados para la escritura y lectura, especialmente el directorio `img/` para almacenar los archivos de logo.
- **Validaciones**: El formulario incluye validaciones para asegurarse de que los datos ingresados sean correctos.


### Como activar SQLite3 en Apache

1. Primero ejecuta tu servidor de apache como xampp
   ![1](/archivos%20para%20el%20readme/1.png)

2. Ahora coloca en tu navegador la URL de tu carpeta raiz de proyecto, como por ejemplo: `http://localhost/Raiz/index.php`
   muy probablemente surja este error de aqui:
   ![2](/archivos%20para%20el%20readme/3.png)

3. Para resolverlo es tan sencillo como ir a la configuracion de Apache y seleccionar la opcion PHP.ini
   ![3](/archivos%20para%20el%20readme/4.png)

4. En el archivo php.ini, busca la siguiente linea `;extension=sqlite3` y quitale el `;` del inicio
   ![4](/archivos%20para%20el%20readme/5.png)
   Debe de quedar asi
   ![5](/archivos%20para%20el%20readme/6.png)

5. Finalmente guarda el archivo o presion `Ctrl + G` o `Ctrl + S`, cierra el archivo y reinicia el servidor de Apache
   ![6](/archivos%20para%20el%20readme/7.png)

6. Vuelve a encender el servidor  
   ![7](/archivos%20para%20el%20readme/8.png)

7. La conexion con la base de datos ya funciona 🥳🥳
   ![8](/archivos%20para%20el%20readme/9.png)

### Como ver la base de datos

**Descargar e instalar DB Browser for SQLite**
1. **Descarga** DB Browser desde su sitio oficial: [sqlitebrowser.org](https://sqlitebrowser.org).
2. **Instala** el programa siguiendo las instrucciones para tu sistema operativo (Windows, macOS o Linux).


**Abrir la base de datos SQLite**
1. **Abre DB Browser for SQLite**.
2. Haz clic en **"Abrir Base de Datos"** o ve al menú `Archivo > Abrir Base de Datos...`.
3. Navega hasta el archivo de tu base de datos SQLite (con extensión `.sqlite`, `.db` o similar) y selecciona **Abrir**.


**Explorar la base de datos**
Una vez cargada la base de datos, puedes realizar diferentes acciones:
1. **Ver las tablas**:
   - Ve a la pestaña **"Examinar datos"**.
   - En el menú desplegable superior, selecciona una tabla para ver su contenido.


2. **Estructura de las tablas**:
   - Ve a la pestaña **"Diseñar Base de Datos"**.
   - Aquí puedes inspeccionar los nombres de las tablas, columnas, tipos de datos y restricciones.


3. **Ejecutar consultas SQL**:
   - Ve a la pestaña **"Ejecutar SQL"**.
   - Escribe consultas SQL personalizadas en el editor.
   - Haz clic en **"Ejecutar SQL"** para ver los resultados en la parte inferior.


4. **Editar datos**:
   - En la pestaña **"Examinar datos"**, puedes modificar directamente las filas de la tabla.
   - Selecciona un campo y edita su valor; luego presiona **Enter**.
   - Haz clic en **"Guardar cambios"** para aplicar las modificaciones.


5. **Crear o modificar tablas**:
   - Ve a la pestaña **"Diseñar Base de Datos"**.
   - Usa las opciones disponibles para agregar, modificar o eliminar tablas y columnas.


**Guardar los cambios**
- Todos los cambios realizados en la base de datos deben guardarse manualmente.
- Haz clic en **"Guardar cambios"** (icono de disquete) para asegurar que las ediciones se apliquen al archivo de la base de datos.


**Cerrar la base de datos**
- Ve a `Archivo > Cerrar Base de Datos` cuando termines de trabajar.
- Esto libera el archivo para ser usado en otros programas o procesos.



---



## Funcionamiento del programa


### **Materias.sqlite**


**Descripción del Código:**


1. **Tabla `Cursos`:**
   - **`id_curso`**: Clave primaria que se incrementa automáticamente.
   - **`anio`**: Año del curso (entero y no nulo).
   - **`division`**: División del curso (texto y no nulo).


2. **Tabla `Materias`:**
   - **`id_materia`**: Clave primaria que se incrementa automáticamente.
   - **`nombre_materia`**: Nombre de la materia (texto y no nulo).
   - **`numero_materia`**: Número de la materia (entero, no nulo, entre 0 y 999).
   - **`logo_materia`**: Ruta del logo de la materia (texto).


3. **Tabla intermedia `CursoMateria`:**
   - **`id_curso`**: Clave foránea que referencia a `id_curso` en la tabla `Cursos`.
   - **`id_materia`**: Clave foránea que referencia a `id_materia` en la tabla `Materias`.
   - Esta tabla establece una relación de muchos a muchos entre cursos y materias.


**Inserciones de Datos:**
- Se insertan algunos cursos en la tabla `Cursos`.
- Se insertan algunas materias en la tabla `Materias`.
- Se crean relaciones entre cursos y materias en la tabla `CursoMateria`.


**Funcionalidad Clave:**
- Las claves foráneas en `CursoMateria` permiten eliminar automáticamente las filas correspondientes si se borra un curso o una materia (gracias a `ON DELETE CASCADE`).


### **conectar_database.php**


**Descripción del Código**


1. **Definición de una clase `basededatos` que extiende SQLite3:**
   ```php
   class basededatos extends SQLite3 {
       public function __construct() {
           $this->open('../database/Materias.sqlite');
       }
   }
   ```
   - **Clase `basededatos`**: Hereda de la clase `SQLite3`, lo que permite a la nueva clase utilizar todas las funcionalidades de `SQLite3`.
   - **Constructor `__construct()`**: Se invoca automáticamente cuando se crea un objeto de la clase `basededatos`. En este caso, se utiliza para abrir la base de datos SQLite ubicada en `../database/Materias.sqlite`.


2. **Creación de un objeto de la clase `basededatos` y manejo de errores:**
   ```php
   $db = new basededatos();
   if (!$db) {
       echo $db->lastErrorMsg();
   }
   ```
   - **Creación del objeto `$db`**: Se instancia un nuevo objeto de la clase `basededatos`, lo que automáticamente intenta abrir la base de datos mencionada.
   - **Manejo de errores**: Si la conexión a la base de datos falla (es decir, si `$db` es `false`), se imprime el último mensaje de error utilizando el método `lastErrorMsg()` de la clase `SQLite3`.


**Funcionalidad Clave:**
- **Conexión a la Base de Datos**: Este código establece una conexión a una base de datos SQLite llamada `Materias.sqlite`.
- **Manejo de Errores**: Si la conexión falla, el código proporciona un mecanismo para mostrar el mensaje de error correspondiente, lo cual es útil para la depuración y el mantenimiento del sistema.


### **index.php**

**Descripción del Código:**

1. **Declaración del Tipo de Documento y Lenguaje:**
   ```html
   <!DOCTYPE html>
   <html lang="es">
   ```
   - `<!DOCTYPE html>`: Define el tipo de documento como HTML5.
   - `<html lang="es">`: Indica que el contenido está en español.

2. **Sección `<head>`:**
   ```html
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Inicio</title>
       <link rel="stylesheet" href="styles/index.css">
   </head>
   ```
   - **`<meta charset="UTF-8">`**: Establece la codificación de caracteres como UTF-8.
   - **`<meta name="viewport" content="width=device-width, initial-scale=1.0">`**: Configura la ventana gráfica para garantizar que la página se vea bien en todos los dispositivos.
   - **`<title>Inicio</title>`**: Define el título de la página que aparece en la pestaña del navegador.
   - **`<link rel="stylesheet" href="styles/index.css">`**: Enlaza la hoja de estilos CSS externa ubicada en el directorio `styles`.

3. **Sección `<body>`:**
   ```html
   <body>
       <h1>Página Principal</h1>
       <img src="img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
       <nav>
           <ul> 
               <li><a href="php/Formulario_Todas_Materias.php">Ver Todas las Materias</a></li>
               <li><a href="php/Formulario_Modificar_Materia.php">Modificar Materia</a></li>
           </ul>
       </nav>
       <footer>
           <hr>
           <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
           <p>Proyecto de Implementación de sitios web dinámicos</p>
           <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
       </footer>
   </body>
   </html>
   ```
   - **`<h1>Página Principal</h1>`**: Un encabezado de nivel 1 que indica el título principal de la página.
   - **`<img src="img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">`**: Incluye una imagen con una descripción alternativa. La imagen se encuentra en el directorio `img`.
   - **`<nav>` y `<ul>`**: Define un contenedor de navegación con una lista no ordenada. Dentro de la lista:
     - **`<li><a href="php/Formulario_Todas_Materias.php">Ver Todas las Materias</a></li>`**: Un enlace a un archivo PHP para ver todas las materias.
     - **`<li><a href="php/Formulario_Modificar_Materia.php">Modificar Materia</a></li>`**: Un enlace a un archivo PHP para modificar materias.

4. **Pie de página (`<footer>`):**
   ```html
   <footer>
       <hr>
       <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
       <p>Proyecto de Implementación de sitios web dinámicos</p>
       <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
   </footer>
   ```
   - **`<hr>`**: Una línea horizontal para separar el contenido del pie de página.
   - **Información del proyecto y autores**: Descripción del proyecto y créditos a los autores.

**Funcionalidad Clave:**
- **Estilo y Diseño**: El archivo CSS enlazado (`styles/index.css`) permite la personalización del estilo de la página.
- **Navegación**: Los enlaces en la sección de navegación permiten a los usuarios dirigirse a diferentes secciones del sitio web.
- **Accesibilidad**: Los atributos `alt` en las imágenes mejoran la accesibilidad y la experiencia del usuario.


### formulario_todas_materias.php

**Descripción del Código:**

1. **Estructura y Metadatos:**
   ```html
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Listado de Materias</title>
       <link rel="stylesheet" href="../styles/formulario_todas_materias.css">
   </head>
   ```
   - **`<!DOCTYPE html>`**: Define el tipo de documento como HTML5.
   - **`<html lang="es">`**: Indica que el contenido está en español.
   - **`<meta charset="UTF-8">`**: Establece la codificación de caracteres como UTF-8.
   - **`<meta name="viewport" content="width=device-width, initial-scale=1.0">`**: Configura la ventana gráfica para garantizar que la página se vea bien en todos los dispositivos.
   - **`<title>Listado de Materias</title>`**: Define el título de la página que aparece en la pestaña del navegador.
   - **`<link rel="stylesheet" href="../styles/formulario_todas_materias.css">`**: Enlaza la hoja de estilos CSS externa ubicada en el directorio `styles`.

2. **Contenido del Cuerpo (`<body>`):**
   ```html
   <body>
       <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
       <button id="volver" onclick="window.location.href='../index.php';">Volver</button>
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
   ```
   - **Imagen**: Se incluye una imagen de fondo de la Escuela Chacabuco almacenada en el directorio `img`.
   - **Botón "Volver"**: Al hacer clic, el botón redirige a `index.php`.
   - **Formulario (`<form>`)**: Utiliza el método `post` para enviar datos.

3. **Tabla de Materias:**
   ```html
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
   <center><p><b>Total de materias: <span><?php echo $contador; ?></span></b></p></center>
   ```
   - **Encabezados de la Tabla (`<thead>` y `<tr>`)**: Define las columnas de la tabla (Número de Materia, Nombre de Materia, Año, División).
   - **Cuerpo de la Tabla (`<tbody>`)**: Incluye filas con los datos de cada materia obtenidos de la base de datos SQLite.

4. **Código PHP:**
   ```php
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
   ```
   - **`include '../scripts/todas_materias.php';`**: Incluye el archivo PHP que maneja la lógica y la obtención de datos de la base de datos.
   - **Bucle `while`**: Itera sobre cada fila devuelta por la consulta SQL y muestra los datos de cada materia en una fila de la tabla HTML.
   - **Función `htmlspecialchars`**: Se utiliza para escapar caracteres especiales y prevenir ataques XSS (Cross-Site Scripting).


### formulario_modificar_materia.php

**Descripción del Código:**

1. **Estructura y Metadatos:**
   ```html
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Modificación De Materias</title>
       <link rel="stylesheet" href="..\styles\formulario_modifica_materia.css">
   </head>
   ```
   - **`<!DOCTYPE html>`**: Define el tipo de documento como HTML5.
   - **`<html lang="es">`**: Indica que el contenido está en español.
   - **`<meta charset="UTF-8">`**: Establece la codificación de caracteres como UTF-8.
   - **`<meta name="viewport" content="width=device-width, initial-scale=1.0">`**: Configura la ventana gráfica para garantizar que la página se vea bien en todos los dispositivos.
   - **`<title>Modificación De Materias</title>`**: Define el título de la página que aparece en la pestaña del navegador.
   - **`<link rel="stylesheet" href="..\styles\formulario_modifica_materia.css">`**: Enlaza la hoja de estilos CSS externa ubicada en el directorio `styles`.

2. **Contenido del Cuerpo (`<body>`):**
   ```html
   <body>
       <img src="../img/Frente_Chacabuco.jpg" alt="Escuela Chacabuco Frente">
       <button id="volver" onclick="window.location.href='../index.php';">Volver</button>
       <center><h1>Modificación De Materias</h1></center>
       <div class="form-container">
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
                   <button type="reset" style="margin-left: 20px;">Limpiar datos</button>
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
   ```
   - **Imagen**: Se incluye una imagen de fondo de la Escuela Chacabuco almacenada en el directorio `img`.
   - **Botón "Volver"**: Al hacer clic, el botón redirige a `index.php`.
   - **Encabezado Principal**: Un encabezado centrado con el texto "Modificación De Materias".
   - **Contenedor de Formulario (`<div class="form-container">`)**: Un contenedor para el formulario de modificación de materias.

3. **Formulario de Modificación de Materias (`<form>`):**
   ```html
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
           <button type="reset" style="margin-left: 20px;">Limpiar datos</button>
           <button type="submit" name="accion" value="eliminar" style="margin-left: 20px;">Eliminar Materia</button>
       </div>
   </form>
   ```
   - **Atributos del Formulario**: El formulario envía datos al script `../scripts/modificar_materias.php` utilizando el método `post` y permite la carga de archivos (`enctype="multipart/form-data"`).
   - **Campos del Formulario**: Incluye entradas para el número de materia, nombre de materia y logo de la materia, cada una con validación de patrones.
   - **Botones**: Tres botones que permiten modificar datos, limpiar el formulario, y eliminar materias.

4. **Pie de Página (`<footer>`):**
   ```html
   <footer>
       <hr>
       <p><b>E.E.S.T N°6 CHACABUCO – MORÓN (7° 4° año 2024)</b></p>
       <p>Proyecto de Implementación de sitios web dinámicos</p>
       <p>Autores: Agustin Sebriano, Emanuel Sebriano Brandan, Nehuen Matos, Matias De Pressa</p>
   </footer>
   ```
   - **`<hr>`**: Una línea horizontal que separa el contenido del pie de página.
   - **Información del Proyecto y Autores**: Descripción del proyecto y créditos a los autores.

**Funcionalidad Clave:**
- **Modificación y Eliminación de Materias**: Permite a los usuarios modificar o eliminar datos de materias existentes.
- **Validación de Datos**: Utiliza patrones y atributos para validar la entrada del usuario.

### todas_materias.php


**Descripción del Código:**

1. **Inclusión del Archivo de Conexión:**
   ```php
   include 'conectar_database.php';
   ```
   - **`include 'conectar_database.php';`**: Esta línea incluye el archivo `conectar_database.php`, que probablemente contiene la lógica para conectarse a la base de datos SQLite.

2. **Definición de la Función `obtenerTodasLasMaterias`:**
   ```php
   function obtenerTodasLasMaterias($db) {
       $sql = "SELECT Materias.numero_materia, Materias.nombre_materia, Cursos.anio, Cursos.division
               FROM CursoMateria
               JOIN Materias ON CursoMateria.id_materia = Materias.id_materia
               JOIN Cursos ON CursoMateria.id_curso = Cursos.id_curso";

       $resultado = $db->query($sql);
       return $resultado;
   }
   ```
   - **Función `obtenerTodasLasMaterias($db)`**: Se define una función que toma como parámetro `$db`, que es la conexión a la base de datos.
   - **Consulta SQL (`$sql`)**: La consulta selecciona el `numero_materia` y `nombre_materia` de la tabla `Materias`, y el `anio` y `division` de la tabla `Cursos`.
     - **`JOIN`**: Se utilizan `JOIN` para unir las tablas `CursoMateria`, `Materias` y `Cursos` basándose en las claves foráneas `id_materia` y `id_curso`.
   - **Ejecución de la Consulta (`$db->query($sql)`)**: La consulta SQL se ejecuta mediante el método `query` de la conexión a la base de datos.
   - **Retorno del Resultado (`return $resultado`)**: El resultado de la consulta se devuelve y se almacena en la variable `$resultado`.

3. **Ejecución de la Función y Almacenamiento del Resultado:**
   ```php
   $materias = obtenerTodasLasMaterias($db);
   ```
   - **Llamada a la Función (`obtenerTodasLasMaterias($db)`)**: Se llama a la función `obtenerTodasLasMaterias` pasando la conexión a la base de datos `$db` como argumento.
   - **Almacenamiento del Resultado (`$materias`)**: El resultado de la función se almacena en la variable `$materias`.

**Funcionalidad Clave:**
- **Unión de Tablas (`JOIN`)**: La consulta une las tablas `CursoMateria`, `Materias` y `Cursos` para obtener información combinada de estas tablas.
- **Selección de Datos**: Se seleccionan y devuelven los datos relevantes de las tablas, incluyendo el número y nombre de la materia, así como el año y la división del curso correspondiente.

### modificar_materias:


**Descripción del Código PHP:**


1. **Inclusión de Archivos Necesarios:**
   ```php
   include 'conectar_database.php';
   include '../php/formulario_modificar_materia.php';
   ```
   - **`include 'conectar_database.php';`**: Incluye el archivo que maneja la conexión a la base de datos.
   - **`include '../php/formulario_modificar_materia.php';`**: Incluye el archivo del formulario de modificación de materias.

2. **Verificación del Método de Solicitud:**
   ```php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Código dentro del bloque
   } else {
       echo "Solicitud no válida.";
   }
   ```
   - **`$_SERVER["REQUEST_METHOD"] == "POST"`**: Comprueba si la solicitud es de tipo POST.

3. **Recuperación de Datos del Formulario:**
   ```php
   $numero_materia = $_POST['numero_materia'];
   $accion = $_POST['accion'];
   ```
   - **`$numero_materia`**: Almacena el número de materia proporcionado por el formulario.
   - **`$accion`**: Almacena la acción seleccionada (modificar o eliminar).

4. **Condicional para la Acción "Modificar":**
   ```php
   if ($accion === 'modificar') {
       $nombre_materia = $_POST['nombre_materia'];
       
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
   }
   ```
   - **Verificación del archivo subido**: Comprueba si se ha subido un archivo sin errores.
   - **Movimiento del archivo subido**: Mueve el archivo a un directorio específico.
   - **Actualización en la base de datos**: Prepara y ejecuta una consulta SQL para actualizar el nombre y logo de la materia.

5. **Condicional para la Acción "Eliminar":**
   ```php
   elseif ($accion === 'eliminar') {
       $sql = "DELETE FROM Materias WHERE numero_materia = :numero_materia";
       $stmt = $db->prepare($sql);
       $stmt->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);
       $resultado = $stmt->execute();
       
       if ($resultado) {
           echo "La materia se eliminó correctamente.";
           $sqlActualiza = "UPDATE CursoMateria SET id_materia = 0 WHERE id_materia = :numero_materia";
           $stmtActualiza = $db->prepare($sqlActualiza);
           $stmtActualiza->bindValue(':numero_materia', $numero_materia, SQLITE3_INTEGER);
           $stmtActualiza->execute();
       } else {
           echo "Hubo un error al eliminar la materia.";
       }
   }
   ```
   - **Eliminación de la materia**: Prepara y ejecuta una consulta SQL para eliminar la materia de la base de datos.
   - **Actualización en `CursoMateria`**: Actualiza la tabla intermedia `CursoMateria` para eliminar las referencias a la materia eliminada.

6. **Manejo de Acción no Válida:**
   ```php
   else {
       echo "Acción no válida.";
   }
   ```

**Funcionalidad Clave:**
- **Inclusión de Archivos**: Conecta el código con otros archivos necesarios para la ejecución.
- **Manejo de Solicitudes POST**: Procesa las solicitudes recibidas a través del formulario.
- **Acciones de Modificar y Eliminar**: Permite modificar y eliminar registros en la base de datos, actualizando también la tabla intermedia cuando sea necesario.
- **Validación y Movimiento de Archivos**: Verifica y maneja la carga de archivos para almacenar imágenes de materias.


### Flujo de archivos


flowchart LR
    A[index.html] -- "Enlace a" --> B[styles/index.css]
    A -- "Redirección a" --> C[php/Formulario_Todas_Materias.php]
    A -- "Redirección a" --> D[php/Formulario_Modificar_Materia.php]
    C -- "Incluye" --> E[scripts/todas_materias.php]
    C -- "Enlace a" --> F[styles/formulario_todas_materias.css]
    D -- "Incluye" --> G[scripts/modificar_materias.php]
    D -- "Enlace a" --> H[styles/formulario_modifica_materia.css]
    E -- "Conexión con" --> I[Materias.sqlite]
    F -- "Imagen" --> J[img/Frente_Chacabuco.jpg]
    G -- "Conexión con" --> I[Materias.sqlite]
    H -- "Imagen" --> J[img/Frente_Chacabuco.jpg]
    G -- "Incluye" --> K[conectar_database.php]
    E -- "Incluye" --> K[conectar_database.php]


## Tecnologias

### Tecnologias Utilizadas:
- Diseño: HTML5 y CSS3
- Base de Datos: SQLite3
- Programacion: PHP
- Servidor: Apache


#### 1. **HTML (Hypertext Markup Language)**
**¿Qué es?**
- HTML es el lenguaje estándar de marcado utilizado para crear páginas web.
- Define la estructura y el contenido de una página web mediante el uso de elementos y etiquetas.

**¿Cómo funciona?**
- HTML utiliza etiquetas para crear elementos como párrafos (`<p>`), encabezados (`<h1>` a `<h6>`), listas (`<ul>` y `<ol>`), enlaces (`<a>`), imágenes (`<img>`), tablas (`<table>`), formularios (`<form>`), entre otros.
- Los navegadores web interpretan y renderizan el código HTML para mostrar el contenido en la pantalla.

#### 2. **CSS (Cascading Style Sheets)**
**¿Qué es?**
- CSS es un lenguaje de hojas de estilo utilizado para describir la presentación de documentos HTML.
- Define cómo los elementos HTML deben mostrarse visualmente en diferentes dispositivos y medios.

**¿Cómo funciona?**
- CSS utiliza selectores para seleccionar elementos HTML y aplicarles estilos específicos.
- Las propiedades CSS controlan aspectos del diseño como colores, fuentes, márgenes, rellenos, alineación, disposición, etc.
- Se pueden aplicar estilos en línea, en la sección `<style>` del documento HTML, o en archivos CSS externos enlazados al HTML.

#### 3. **PHP (Hypertext Preprocessor)**
**¿Qué es?**
- PHP es un lenguaje de scripting del lado del servidor que se utiliza para desarrollar aplicaciones web dinámicas.
- Se integra con el HTML para interactuar con bases de datos, manejar formularios, autenticar usuarios, y más.

**¿Cómo funciona?**
- El servidor web ejecuta el código PHP antes de enviar la página resultante al navegador del usuario.
- PHP puede generar contenido HTML dinámico, manejar sesiones y cookies, procesar formularios, y realizar operaciones CRUD (crear, leer, actualizar, eliminar) en bases de datos.
- El código PHP se puede incrustar directamente en documentos HTML usando etiquetas `<?php ... ?>`.

#### 4. **SQLite**
**¿Qué es?**
- SQLite es una biblioteca de software que proporciona una base de datos SQL ligera, autónoma y sin servidor.
- Es una de las bases de datos más utilizadas en aplicaciones móviles y web debido a su simplicidad y eficiencia.

**¿Cómo funciona?**
- SQLite almacena toda la base de datos (esquema y datos) en un solo archivo de disco ordinario.
- No requiere una configuración de servidor de base de datos separada, lo que simplifica la configuración y el mantenimiento.
- Utiliza comandos SQL para interactuar con la base de datos, permitiendo la ejecución de consultas, la inserción de datos, la actualización de registros y la eliminación de información.


#### 5. **Apache**
**¿Qué es?**
Apache es un servidor web de código abierto desarrollado y mantenido por la Apache Software Foundation. Es utilizado para alojar sitios web y servir contenido web a los usuarios de Internet.

Permite:
1. **Servir Contenido Web**: Apache recibe solicitudes de los clientes (navegadores web) y les responde sirviendo archivos HTML, imágenes, videos y otros tipos de contenido.
2. **Ejecutar Aplicaciones del Lado del Servidor**: Apache puede ejecutar scripts y aplicaciones escritas en lenguajes como PHP, Perl, Python, y más, para generar contenido dinámico.
3. **Configuración Flexible**: Apache permite una configuración detallada y personalizada a través de archivos de configuración como `httpd.conf` o `.htaccess`.
4. **Módulos Extensibles**: Apache tiene una arquitectura modular que permite agregar funcionalidad adicional a través de módulos (por ejemplo, mod_rewrite para reescritura de URLs, mod_ssl para seguridad SSL/TLS).

**¿Cómo Funciona?**
1. **Arquitectura Cliente-Servidor**: Cuando un usuario ingresa una URL en su navegador, el navegador envía una solicitud HTTP al servidor Apache alojando el sitio web.
2. **Procesamiento de Solicitudes**: Apache recibe la solicitud, la procesa y determina qué acción tomar, ya sea sirviendo un archivo estático (como un archivo HTML o una imagen) o ejecutando un script (como un archivo PHP).
3. **Respuesta**: Apache luego envía la respuesta generada de vuelta al navegador del usuario, que muestra el contenido en la pantalla del usuario.