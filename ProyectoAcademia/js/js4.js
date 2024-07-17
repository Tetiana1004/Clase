 document.addEventListener("DOMContentLoaded", function() {
            // Datos de los cursos
            const cursos = {
                "Programación Python": 100,
                "Programación Java": 120,
                "Diseño web": 80
            };
        
            // Solicitar datos al usuario
            const nombre = prompt("Ingrese su nombre:");
            const direccion = prompt("Ingrese su dirección:");
        
            let cursoSeleccionado = null;
            while (!cursoSeleccionado) {
                const curso = prompt("Seleccione un curso (escriba el nombre exacto):\n- Programación Python\n- Programación Java\n- Diseño web");
                if (cursos[curso] !== undefined) {
                    cursoSeleccionado = curso;
                } else {
                    alert("Curso no válido. Por favor, intente nuevamente.");
                }
            }
        
            const precioUnitario = cursos[cursoSeleccionado];
            const cantidad = 1; // Suponiendo que solo se selecciona un curso
            const importe = precioUnitario * cantidad;
            const iva = importe * 0.21;
            const total = importe + iva;
        
            // Rellenar la factura
            document.querySelector(".invoice-section div:nth-child(1)").innerHTML = `
                <p><strong>Facturado a:</strong></p>
                <p>${nombre}</p>
                <p>${direccion}</p>
            `;
            document.querySelector(".invoice-section div:nth-child(2)").innerHTML = `
                <p><strong>ENVIAR A:</strong></p>
                <p>${nombre}</p>
                <p>${direccion}</p>
            `;
        
            document.querySelector(".invoice-table tbody").innerHTML = `
                <tr>
                    <td>${cantidad}</td>
                    <td>${cursoSeleccionado}</td>
                    <td>€${precioUnitario.toFixed(2)}</td>
                    <td>€${importe.toFixed(2)}</td>
                </tr>
            `;
        
            document.querySelector(".invoice-total").innerHTML = `
                <p><strong>Subtotal:</strong> €${importe.toFixed(2)}</p>
                <p><strong>IVA 21.0%:</strong> €${iva.toFixed(2)}</p>
                <p><strong>TOTAL:</strong> €${total.toFixed(2)}</p>
            `;
        });
        