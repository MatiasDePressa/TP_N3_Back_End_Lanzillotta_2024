document.getElementById('materia-form').addEventListener('submit', function(event) {

    event.preventDefault(); //detiene el envio del formulario
    // Verifica si nroMateria es string o si tiene más de 3 digitos numericos
    const nroMateria = document.getElementById('nroMateria').value;
    if (!/^\d{1,3}$/.test(nroMateria)) {
        alert('El número de materia debe tener entre 1 y 3 dígitos numéricos.');
        return;
    }

    // Verifica si nombreMateria posee caracteres alfabeticos y si tiene menos de 50 caracteres
    const nombreMateria = document.getElementById('nombreMateria').value;
    if (!/^[a-zA-Z\s]{1,50}$/.test(nombreMateria)) {
        alert('El nombre de la materia debe tener hasta 50 caracteres alfabéticos.');
        return;
    }

    // Verifica si no se ingresó ninguna ruta para el logo
    const logoMateria = document.getElementById('seleccionarArchivo').value;
    if (logoMateria.trim() === '') {
        alert('Debe proporcionar la ruta del logo de la materia.');
        return;
    }

    // Si todo es válido, se muestra por mensaje
    alert('Datos validados correctamente.');

    //event.target.submit();  // envia el formulario
});