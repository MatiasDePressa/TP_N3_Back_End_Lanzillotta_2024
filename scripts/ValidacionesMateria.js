document.getElementById('materia-form').addEventListener('submit', function(event) {

    event.preventDefault(); //detiene el envio del formulario
    // Verifica si nroMateria es string o si tiene más de 3 digitos numericos
    const numero_materia = document.getElementById('numero_materia').value;
    if (!/^\d{1,3}$/.test(numero_materia)) {
        alert('El número de materia debe tener entre 1 y 3 dígitos numéricos');
        return;
    }

    // Verifica si nombreMateria posee caracteres alfabeticos y si tiene menos de 50 caracteres
    const nombre_materia = document.getElementById('nombre_materia').value;
    if (!/^[a-zA-Z\s]{1,50}$/.test(nombre_materia)) {
        alert('El nombre de materia tiene un maximo de 50 caracteres');
        return;
    }

    // Verifica si no se ingresó ninguna ruta para el logo
    const logo_materia = document.getElementById('logo_materia').value;
    if (logo_materia.trim() === '') {
        alert('Debe proporcionar la ruta del logo de la materia');
        return;
    }

    // Si todo es válido, se muestra por mensaje
    alert('Datos validados correctamente.');

    //event.target.submit();  // envia el formulario
});