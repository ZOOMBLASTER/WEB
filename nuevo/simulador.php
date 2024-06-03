<?php
include 'inc/header.php';

Session::CheckSession();

?>

      <div class="card ">
        <div class="card-header">
          
<?php
$username = Session::get('username');
if (isset($username)) {
 // echo $username;
}
 ?></span>

        </div>
        <div class="card-body pr-2 pl-2">

          


     <!--=============== REMIXICONS ===============-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


     <link rel="stylesheet" href="./css/simulador.css">

    <title>Ni Hyruuya Na'</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">





<section>
   <h2 class="csubtitle">SIMULADOR DE ESPECIES</h2>
     

</section>




<div class="contenedor">
   <div class="hero">
      <h1 class="titulo">Mi pecera perfecta</h1>
      <div class="img">
         <!-- Imagen -->
         <img class="imagen" src="images/pecera.png" alt="" style="max-width: 40%; height: auto;">
      </div>
   </div>

   <div class="contenedor-pecera">
      <h2>Mi Pecera</h2>
      <div class="opciones">
         <div class="opcion">
            <label for="tamaño_acuario">Tamaño del Acuario:</label>
            <label type="text" id="tamaño_acuario">0</label>
         </div>
         <div class="opcion">
            <label for="temperatura">Temperatura (min-max):</label>
            <label type="text" id="temperatura" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="ph">pH (min-max):</label>
            <label type="text" id="ph" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="dureza">Dureza (min-max):</label>
            <label type="text" id="dureza" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="nitritos">Nitritos (min-max):</label>
            <label type="text" id="nitritos" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="nitratos">Nitratos (min-max):</label>
            <label type="text" id="nitratos" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="amoniaco">Amoniaco (min-max):</label>
            <label type="text" id="amoniaco" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <div class="opcion">
            <label for="salinidad">Salinidad (min-max):</label>
            <label type="text" id="salinidad" pattern="\d+(\.\d+)?" title="Introduce un número decimal válido">0-0</label>
         </div>
         <!-- Agregar más opciones según sea necesario -->
      </div>
   </div>
</div>

<script>
    window.onload = function() {
        // Realizar una solicitud AJAX para obtener los peces desde el archivo PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Parsear la respuesta JSON
                    var peces = JSON.parse(xhr.responseText);
                    // Llamar a la función para cargar el selector de peces
                    cargarSelectorPeces(peces);
                } else {
                    console.error("Error al cargar los peces.");
                }
            }
        };
        xhr.open("GET", "./info_peces.php", true);
        xhr.send();
    };

    // Función para cargar el selector de peces
    function cargarSelectorPeces(peces) {
        var selectPeces = document.getElementById("selectPeces");
        
        peces.forEach(function(pez) {
            var opcion = document.createElement("option");
            opcion.text = pez.nombre;
            opcion.value = JSON.stringify(pez); // Almacenar objeto pez como valor de la opción
            selectPeces.appendChild(opcion);
        });
    }

    // Función para agregar el pez seleccionado a la tabla
    function agregarPez() {
        var selectPeces = document.getElementById("selectPeces");
        var pezSeleccionado = JSON.parse(selectPeces.value); // Obtener el objeto pez seleccionado
        
        // Verificar si el pez ya está en la tabla
        var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
        var filas = tablaPeces.getElementsByTagName("tr");
        var encontrado = false;
        for (var i = 0; i < filas.length; i++) {
            var nombreCelda = filas[i].getElementsByTagName("td")[0].textContent;
            if (nombreCelda === pezSeleccionado.nombre) {
                encontrado = true;
                break;
            }
        }

        // Si el pez no está en la tabla, agregarlo
        if (!encontrado) {
            var fila = tablaPeces.insertRow();
            // Agregar las celdas con la información del pez
            for (var propiedad in pezSeleccionado) {
                if (pezSeleccionado.hasOwnProperty(propiedad)) {
                    var celda = fila.insertCell();
                    celda.textContent = pezSeleccionado[propiedad];
                }
            }
            // Agregar botón para eliminar el pez
            var celdaAccion = fila.insertCell();
            var botonEliminar = document.createElement("button");
            botonEliminar.textContent = "Eliminar";
            botonEliminar.onclick = function () {
                fila.remove();
                actualizar();
            };
            celdaAccion.appendChild(botonEliminar);
        } else {
            alert("¡Este pez ya está en la tabla!");
        }
        actualizar();
    }


    function actualizar() {
    // Llamar a la función para actualizar el tamaño promedio del acuario
    actualizarTamañoAcuario();
    actualizarTemperaturaMinMax();

    actualizarPHMinMax();
    actualizarDurezaMinMax();

    actualizarNitritosMinMax();

    actualizarNitratosMinMax();
    actualizarAmoniacoMinMax();
    actualizarSalinidadMinMax();
    revisarPecera(); 

}
    

function actualizarTamañoAcuario() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var totalTamaños = 0;

    // Sumar todos los valores de la columna "Tamaño Acuario" en la tabla
    for (var i = 0; i < filas.length; i++) {
        var celda = filas[i].getElementsByTagName("td")[2]; // Índice de columna de "Tamaño Acuario"
        totalTamaños += parseInt(celda.textContent); // Convertir a entero
    }

    // Actualizar la etiqueta correspondiente con la suma calculada
    var etiquetaTamañoAcuario = document.getElementById("tamaño_acuario");
    etiquetaTamañoAcuario.textContent = totalTamaños; // Mostrar la suma
}

function actualizarTemperaturaMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de temperatura de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[3]; // Índice de columna de "Temperatura Mínima"
        var celdaMax = filas[i].getElementsByTagName("td")[4]; // Índice de columna de "Temperatura Máxima"
        minimos.push(parseInt(celdaMin.textContent));
        maximos.push(parseInt(celdaMax.textContent));
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var temperaturaValida = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de temperatura válido
    var etiquetaTemperatura = document.getElementById("temperatura");
    etiquetaTemperatura.textContent = temperaturaValida;
}

// Función para actualizar el rango de pH (min-max)
function actualizarPHMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de pH de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[5]; // Índice de columna de "pH Mínimo"
        var celdaMax = filas[i].getElementsByTagName("td")[6]; // Índice de columna de "pH Máximo"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var pHValido = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de pH válido
    var etiquetaPH = document.getElementById("ph");
    etiquetaPH.textContent = pHValido;
}

// Función para actualizar el rango de dureza (min-max)
function actualizarDurezaMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de dureza de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[7]; // Índice de columna de "Dureza Mínima"
        var celdaMax = filas[i].getElementsByTagName("td")[8]; // Índice de columna de "Dureza Máxima"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var durezaValida = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de dureza válido
    var etiquetaDureza = document.getElementById("dureza");
    etiquetaDureza.textContent = durezaValida;
}

// Función para actualizar el rango de nitritos (min-max)
function actualizarNitritosMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de nitritos de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[9]; // Índice de columna de "Nitritos Mínimos"
        var celdaMax = filas[i].getElementsByTagName("td")[10]; // Índice de columna de "Nitritos Máximos"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var nitritosValidos = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de nitritos válido
    var etiquetaNitritos = document.getElementById("nitritos");
    etiquetaNitritos.textContent = nitritosValidos;
}


// Función para actualizar el rango de nitratos (min-max)
function actualizarNitratosMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de nitratos de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[11]; // Índice de columna de "Nitratos Mínimos"
        var celdaMax = filas[i].getElementsByTagName("td")[12]; // Índice de columna de "Nitratos Máximos"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var nitratosValidos = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de nitratos válido
    var etiquetaNitratos = document.getElementById("nitratos");
    etiquetaNitratos.textContent = nitratosValidos;
}

// Función para actualizar el rango de amoniaco (min-max)
function actualizarAmoniacoMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de amoniaco de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[13]; // Índice de columna de "Amoniaco Mínimo"
        var celdaMax = filas[i].getElementsByTagName("td")[14]; // Índice de columna de "Amoniaco Máximo"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var amoniacoValido = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de amoniaco válido
    var etiquetaAmoniaco = document.getElementById("amoniaco");
    etiquetaAmoniaco.textContent = amoniacoValido;
}
// Función para actualizar el rango de salinidad (min-max)
function actualizarSalinidadMinMax() {
    var tablaPeces = document.getElementById("tabla-peces").getElementsByTagName("tbody")[0];
    var filas = tablaPeces.getElementsByTagName("tr");
    var minimos = [];
    var maximos = [];

    // Obtener los valores mínimos y máximos de salinidad de todas las filas
    for (var i = 0; i < filas.length; i++) {
        var celdaMin = filas[i].getElementsByTagName("td")[15]; // Índice de columna de "Salinidad Mínima"
        var celdaMax = filas[i].getElementsByTagName("td")[16]; // Índice de columna de "Salinidad Máxima"
        minimos.push(parseFloat(celdaMin.textContent)); // Convertir a flotante
        maximos.push(parseFloat(celdaMax.textContent)); // Convertir a flotante
    }

    // Encontrar el mayor mínimo y el menor máximo
    var mayorMinimo = Math.max.apply(null, minimos);
    var menorMaximo = Math.min.apply(null, maximos);

    // Verificar si existe un rango válido que cumpla con todas las condiciones
    var salinidadValida = (mayorMinimo <= menorMaximo) ? mayorMinimo + " - " + menorMaximo : -1;

    // Actualizar la etiqueta correspondiente con el rango de salinidad válido
    var etiquetaSalinidad = document.getElementById("salinidad");
    etiquetaSalinidad.textContent = salinidadValida;
}


function mostrarToast(tipo) {
    // Obtener el contenedor de toasts
    var contenedorToast = document.getElementById('contenedor-toast');

    // Ocultar todos los toasts previamente
    var toasts = contenedorToast.querySelectorAll('.toast');
    toasts.forEach(function(toast) {
        toast.style.display = 'none';
    });

    // Mostrar el toast correspondiente
    var toast = document.getElementById(tipo);
    toast.style.display = 'flex';

    // Ocultar el toast después de 3 segundos
    setTimeout(function() {
        toast.style.display = 'none';
    }, 3000);
}

function revisarPecera() {
    // Obtener todos los labels
    var labels = document.querySelectorAll('.opcion label[type="text"]');

    // Inicializar una bandera para verificar si hay algún valor -1
    var hayValorNegativo = false;

    // Iterar sobre todos los labels
    labels.forEach(function(label) {
        // Obtener el valor del label y convertirlo a entero
        var valor = parseInt(label.textContent);

        // Verificar si el valor es -1
        if (valor === -1) {
            hayValorNegativo = true;
        }
    });

    // Obtener la imagen de la pecera
    var imagenPecera = document.querySelector('.imagen');

    // Obtener el título de la pecera
    var tituloPecera = document.querySelector('.titulo');

    // Cambiar la imagen de la pecera y el texto del título según corresponda
    if (hayValorNegativo) {
        // Cambiar la imagen a muerto.png
        imagenPecera.src = 'images/muerto.png';
        // Cambiar el texto del título a "SE TE VAN A MORIR LOS PECES"
        tituloPecera.textContent = "SE TE VAN A MORIR LOS PECES";
        // Mostrar toast de error
        mostrarToast('2');
    } else {
        // Cambiar la imagen a feliz.jpg
        imagenPecera.src = 'images/feliz.jpg';
        // Cambiar el texto del título a "TU PECERA TIENE FUTURO"
        tituloPecera.textContent = "TU PECERA TIENE FUTURO";
        // Mostrar toast de éxito
        mostrarToast('1');
    }
}



</script>
<style>
    .toast {
        display: none; /* Inicialmente invisible */
    }
</style>

<div class="contenedor-toast" id="contenedor-toast">
    <div class="toast exito" id="1">
        <div class="contenido">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                </svg>
            </div>
            <div class="texto">
                <p class="titulo">Éxito!</p>
                <p class="descripcion">Peces compatibles.</p>
            </div>
        </div>
        <button class="btn-cerrar" onclick="cerrarToast('1')">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </button>
    </div>
    <div class="toast error" id="2">
        <div class="contenido">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </div>
            <div class="texto">
                <p class="titulo">Error!</p>
                <p class="descripcion">Peces no compatibles.</p>
            </div>
        </div>
        <button class="btn-cerrar" onclick="cerrarToast('2')">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </button>
    </div>
</div>

<div class="pcontainer">
    <select id="selectPeces">
        <!-- Opciones de peces se agregarán aquí dinámicamente -->
    </select>
    <button onclick="agregarPez()">Agregar Pez</button>
</div>

<div class="table-container">
    <h2>Peces en la pecera</h2>
    <table id="tabla-peces">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nombre</th>
                <th>Tamaño Acuario</th>
                
                <th>Temperatura Mínima</th>
                <th>Temperatura Máxima</th>
                <th>pH Mínimo</th>
                <th>pH Máximo</th>
                <th>Dureza Mínima</th>
                <th>Dureza Máxima</th>
                <th>Nitritos Mínimos</th>
                <th>Nitritos Máximos</th>
                <th>Nitratos Mínimos</th>
                <th>Nitratos Máximos</th>
                <th>Amoniaco Mínimo</th>
                <th>Amoniaco Máximo</th>
                <th>Salinidad Mínima</th>
                <th>Salinidad Máxima</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <!-- Filas de peces se agregarán aquí dinámicamente -->
        </tbody>
    </table>
</div>



<!--

<div class="contenedor">
   <div class="hero">
      <h1 class="titulo">Notificaciones del similador</h1>
      <div class="img">
    
      <img class="imagen" src="images/pecera.png" alt="">
    </div>
      <div class="contenedor-botones" id="contenedor-botones">
         <button class="btn exito" data-tipo="exito">Exito</button>
         <button class="btn error" data-tipo="error">Error</button>
         <button class="btn info" data-tipo="info">Info</button>
         <button class="btn warning" data-tipo="warning">Warning</button>
      </div>
   </div>

   <div class="contenedor-toast" id="contenedor-toast">
      <div class="toast exito" id="1">
         <div class="contenido">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"
                  />
               </svg>
            </div>
            <div class="texto">
               <p class="titulo">Exito!</p>
               <p class="descripcion">La operación fue exitosa.</p>
            </div>
         </div>
         <button class="btn-cerrar">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                  />
               </svg>
            </div>
         </button>
      </div>
      <div class="toast error" id="2">
         <div class="contenido">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                  />
               </svg>
            </div>
            <div class="texto">
               <p class="titulo">Error!</p>
               <p class="descripcion">Hubo un error al intentar procesar la operación.</p>
            </div>
         </div>
         <button class="btn-cerrar">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                  />
               </svg>
            </div>
         </button>
      </div>
      <div class="toast info" id="3">
         <div class="contenido">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                  />
               </svg>
            </div>
            <div class="texto">
               <p class="titulo">Info</p>
               <p class="descripcion">Esta es una notificacion informativa.</p>
            </div>
         </div>
         <button class="btn-cerrar">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                  />
               </svg>
            </div>
         </button>
      </div>
      <div class="toast warning" id="4">
         <div class="contenido">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                  />
               </svg>
            </div>
            <div class="texto">
               <p class="titulo">Advertencia</p>
               <p class="descripcion">Esta notificación es para advertirte sobre algo.</p>
            </div>
         </div>
         <button class="btn-cerrar">
            <div class="icono">
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                  />
               </svg>
            </div>
         </button>
      </div> 
   </div>
</div>
-->






    
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
               <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
               <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
               <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
               <a href="https://mail.google.com/"><i class="fa-brands fa-google-plus"></i></a>
               <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="index.html">Inicio</a></li>
                    <li><a href="agua_dulce.html">Especies de agua dulce</a></li>
                    <li><a href="agua_salada.html">Especies de agua salada</a></li>
                    <li><a href="agua_salobre.html">Especies de agua salobre</a></li>
                    <li><a href="simulador.html">Similador</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                </ul>
            </div>
            
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Ni Hyruuya Na'</span></p>
        </div>
    </footer>
      
  
<script src="js/menu.js"></script>
<script src="./js/questions.js"></script>
<script src="./js/menu.js"></script>
<script src="js/habitats.js"></script>
<script src="js/articulo.js"></script>
<script src="js/buscador.js"></script>
<script src="js/simulador.js"></script>

</body>
</html>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
