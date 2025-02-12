var registro = "<tr><th>Nombre</th><th>Publisher</th><th>Consola</th><th>Fecha de lanzamiento</th></tr>"
var estilo = 0;

function registrar() {
    // Validación de los campos
    if(!document.getElementById("nombre").value) {
        alert("Nombre vacío");
    } else if(!document.getElementById("pub").value) {
        alert("Publisher vacío");
    } else if(!document.getElementById("fecha")) {
        alert("Fecha vacia");
    } else {
        // Todos los campos no están vacío
        if(estilo%2==0) {
            registro = registro + "<tr class=\"renglon1\">";
        } else {
            registro = registro + "<tr class=\"renglon2\">";
        }
        registro = registro + "<td>" + document.getElementById("nombre").value + "</td>";
        registro = registro + "<td>" + document.getElementById("pub").value + "</td>";
        registro = registro + "<td>" + "</td>"; // Fecha de lanzamiento
        registro = registro + "<td>" + document.getElementById("fecha").value + "</td>"; 
        registro = registro + "</tr>"

        document.getElementById("consolas").innerHTML = registro;
        estilo += 1;
    }
}


