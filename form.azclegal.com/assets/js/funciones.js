document.addEventListener("DOMContentLoaded", function() {
    iniciarFormulario();
});

function iniciarFormulario() {
    const selectEmpresa = document.getElementById("empresa");
    const selectRol = document.getElementById("position");

    if (selectEmpresa && selectRol) {
        selectEmpresa.addEventListener("change", function() {
            actualizarRoles(selectEmpresa.value, selectRol);
        });
    }
}

function actualizarRoles(empresaSeleccionada, selectRol) {
    const opcionesPorEmpresa = {
        "1": [ { id: 11, nombre: "Laboral" }, { id: 12, nombre: "Litigios" }, { id: 13, nombre: "Comercial" }, { id: 14, nombre: "Recursos Humanos" }, { id: 15, nombre: "Finanzas y Contabilidad" }, { id: 16, nombre: "Marketing Digital" } ],
        "2": [ { id: 21, nombre: "Abogado Paralegal" }, { id: 22, nombre: "Agente de Servicio" }, { id: 23, nombre: "Interprete" } ],
        "3": [ { id: 31, nombre: "Soporte Tecnico Nv1" }, { id: 32, nombre: "Soporte Tecnico Nv2" }, { id: 33, nombre: "Técnico en Seguridad" }, { id: 34, nombre: "Desarrollador de Software" }, { id: 35, nombre: "Tecnico en Redes" } ]
    };

    selectRol.innerHTML = "<option selected disabled>Seleccione un cargo / rol</option>"; // Limpiar opciones previas

    if (opcionesPorEmpresa[empresaSeleccionada]) {
        opcionesPorEmpresa[empresaSeleccionada].forEach(position => {
            let option = document.createElement("option");
            option.value = position.id;
            option.textContent = position.nombre;
            selectRol.appendChild(option);
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("vinculacionForm").addEventListener("submit", function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch("controller/procesar_form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())  // 👈 Cambiar a text() para ver la respuesta real
        .then(text => {
            console.log("Respuesta del servidor:", text);  // 👀 Ver la respuesta en consola
            return JSON.parse(text); // Intentar convertirlo a JSON manualmente
        })
        .then(data => {
            if (data.success) {
                let modal = new bootstrap.Modal(document.getElementById("confirmacionModal"));
                modal.show();
            } else {
                alert("Error: " + data.error);
            }
        })
        .catch(error => console.error("Error:", error));
    });
});
