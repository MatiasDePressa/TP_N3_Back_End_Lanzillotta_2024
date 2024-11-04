fetch('../BaseDeDatos/Base.json')
            .then(response => response.json())
            .then(materias => {
                const tbody = document.getElementById('materias-list');
                const totalMaterias = document.getElementById('total-materias');
                
                materias.forEach(materia => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${materia.nro}</td>
                        <td>${materia.nombre}</td>
                        <td>${materia.año}</td>
                        <td>${materia.división}</td>
                    `;
                    tbody.appendChild(row);
                });

                totalMaterias.textContent = materias.length;
            })
            .catch(error => console.error('Error al cargar las materias:', error));