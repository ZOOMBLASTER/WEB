document.addEventListener("DOMContentLoaded", function () {
const contenedorBotones = document.getElementById('contenedor-botones');
const contenedorToast = document.getElementById('contenedor-toast');

// Event listener para detectar click en los botones
contenedorBotones.addEventListener('click', (e) => {
	e.preventDefault();

	const tipo = e.target.dataset.tipo;

	if (tipo === 'exito') {
		agregarToast({ tipo: 'exito', titulo: 'Exito!', descripcion: 'La operación fue exitosa.', autoCierre: true });
	}
	if (tipo === 'error') {
		agregarToast({ tipo: 'error', titulo: 'Error', descripcion: 'Hubo un error', autoCierre: true });
	}
	if (tipo === 'info') {
		agregarToast({ tipo: 'info', titulo: 'Info', descripcion: 'Esta es una notificación de información.' });
	}
	if (tipo === 'warning') {
		agregarToast({ tipo: 'warning', titulo: 'Warning', descripcion: 'Ten cuidado' });
	}
});

// Event listener para detectar click en los toasts
contenedorToast.addEventListener('click', (e) => {
	const toastId = e.target.closest('div.toast').id;

	if (e.target.closest('button.btn-cerrar')) {
		cerrarToast(toastId);
	}
});

// Función para cerrar el toast
const cerrarToast = (id) => {
	document.getElementById(id)?.classList.add('cerrando');
};

// Función para agregar la clase de cerrando al toast.
const agregarToast = ({ tipo, titulo, descripcion, autoCierre }) => {
	// Crear el nuevo toast
	const nuevoToast = document.createElement('div');

	// Agregar clases correspondientes
	nuevoToast.classList.add('toast');
	nuevoToast.classList.add(tipo);
	if (autoCierre) nuevoToast.classList.add('autoCierre');

	// Agregar id del toast
	const numeroAlAzar = Math.floor(Math.random() * 100);
	const fecha = Date.now();
	const toastId = fecha + numeroAlAzar;
	nuevoToast.id = toastId;

	// Iconos
	const iconos = {
		exito: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
					<path
						d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"
					/>
				</svg>`,
		error: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
								/>
							</svg>`,
		info: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
								/>
							</svg>`,
		warning: `<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
								/>
							</svg>`,
	};

	// Plantilla del toast
	const toast = `
		<div class="contenido">
			<div class="icono">
				${iconos[tipo]}
			</div>
			<div class="texto">
				<p class="titulo">${titulo}</p>
				<p class="descripcion">${descripcion}</p>
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
	`;

	// Agregar la plantilla al nuevo toast
	nuevoToast.innerHTML = toast;

	// Agregamos el nuevo toast al contenedor
	contenedorToast.appendChild(nuevoToast);

	// Función para menajera el cierre del toast
	const handleAnimacionCierre = (e) => {
		if (e.animationName === 'cierre') {
			nuevoToast.removeEventListener('animationend', handleAnimacionCierre);
			nuevoToast.remove();
		}
	};

	if (autoCierre) {
		setTimeout(() => cerrarToast(toastId), 5000);
	}

	// Agregamos event listener para detectar cuando termine la animación
	nuevoToast.addEventListener('animationend', handleAnimacionCierre);
};




    const selectSize = document.getElementById("selectSize");
    const peceraImage = document.getElementById("peceraImage");
    const selectFishBtn = document.getElementById("selectFishBtn");
    const fishModal = document.getElementById("fishModal");
    // Barra de búsqueda para filtrar las opciones de pez
    const searchBar = document.querySelector(".isearch__input");
    const searchResults = document.querySelector("#isearch-results-modal");
    const originalResults = Array.from(searchResults.children); // Copia de los elementos originales
    const closeBtn = document.getElementById("isearch-close");
    const searchResultsli = document.querySelectorAll("#isearch-results-modal li"); // Seleccionamos todos los elementos de la lista
    const selectedSpeciesText = document.getElementById("iselectedSpeciesMessage");
    adjustSelectFishBtnPosition();

    selectFishBtn.addEventListener("click", function() {
        fishModal.style.display = "block";
    });

    // Cierra el modal cuando se hace clic en la 'x' o fuera del modal
    closeBtn.addEventListener("click", function() {
        fishModal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == fishModal) {
            fishModal.style.display = "none";
        }
    });

    // Arreglo que contiene los nombres de las imágenes correspondientes a cada tamaño de pecera
    const peceraImages = ["1.jpg", "2.jpg", "3.jpeg", "4.jpg", "5.jpg"];

    // Cambiar la imagen de la pecera según el tamaño seleccionado
    selectSize.addEventListener("change", function() {
        const selectedIndex = selectSize.selectedIndex;
        peceraImage.src = peceraImages[selectedIndex]; // Cambiar el src de la imagen
    });

    // Establece la imagen inicial
    peceraImage.src = peceraImages[selectSize.selectedIndex];

    // Cierra el modal y muestra el pez seleccionado al hacer clic en un botón de pez
    const fishBtns = document.querySelectorAll(".ifishBtn");
    fishBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            const selectedFish = btn.value;
            alert("Pez seleccionado: " + selectedFish);
            fishModal.style.display = "none"; // Cierra el modal después de seleccionar un pez
        });
    });

    selectFishBtn.addEventListener("click", function() {
        fishModal.classList.add("active"); // Agrega la clase para mostrar el modal
    });

    closeBtn.addEventListener("click", function() {
        fishModal.classList.remove("active"); // Elimina la clase para ocultar el modal
    });

    searchBar.addEventListener("input", function() {
        const searchTerm = searchBar.value.trim().toLowerCase();

        if (searchTerm.length > 0) {
            const filteredResults = filterResults(searchTerm);

            if (filteredResults.length > 0) {
                displayResults(filteredResults);
                searchResults.style.display = "block"; // Mostrar la lista de resultados si hay coincidencias
            } else {
                displayNoResults();
                searchResults.style.display = "block"; // Mostrar el mensaje de "no hay resultados" aunque no haya coincidencias
            }
        } else {
            clearResults();
            searchResults.style.display = "none"; // Ocultar la lista de resultados si el campo está vacío
        }
    });

    function filterResults(searchValue) {
        console.log("Search Term:", searchValue);
        return originalResults.filter(function(item) {
            const itemName = item.textContent.toLowerCase();
            console.log("Item Name:", itemName);
            return itemName.includes(searchValue);
        });
    }

    function displayResults(filteredResults) {
        const searchResults = document.querySelector("#isearch-results-modal");
        searchResults.innerHTML = ""; // Limpiar contenido existente

        if (filteredResults.length > 0) {
            const fragment = document.createDocumentFragment(); // Crear un fragmento para mejorar la eficiencia

            filteredResults.forEach(function(item) {
                const listItem = document.createElement("li");
                const resultContainer = document.createElement("div"); // Nuevo contenedor
                const link = document.createElement("a");
                link.textContent = item.textContent;
                link.href = "#"; // Opcional: establecer el atributo href para los enlaces
                resultContainer.classList.add("search__result-container"); // Agregar clase de contenedor
                listItem.appendChild(resultContainer); // Agregar el contenedor al listItem
                resultContainer.appendChild(link); // Agregar el enlace al contenedor
                fragment.appendChild(listItem); // Agregar listItem al fragmento
            });

            searchResults.appendChild(fragment); // Agregar el fragmento al DOM
            searchResults.style.display = "block"; // Mostrar la lista de resultados
        } else {
            clearResults();
        }
    }

    function displayNoResults() {
        const searchResults = document.querySelector("#isearch-results-modal");
        searchResults.innerHTML = "<li class='search__result'>No hay resultados</li>";
        searchResults.style.display = "block"; // Mostrar el mensaje de "no hay resultados"
    }

    function clearResults() {
        const searchResults = document.querySelector("#isearch-results-modal");
        searchResults.innerHTML = "";
        searchResults.style.display = "none"; // Ocultar la lista de resultados si no hay coincidencias
    }

    // Objeto que almacena las restricciones de cada especie
    const restrictions = {
        "Tortuga orejas rojas": ["Tortuga orejas rojas"], // Restricción: solo puede haber una Tortuga orejas rojas en la lista
        "Goldfish": [], // Restricción: puede coexistir con cualquier otra especie
        "Guppy": ["Goldfish"], // Restricción: solo puede coexistir con Goldfish
        "Pez leon": ["Pez leon"], // Restricción: solo puede haber un Pez leon en la lista
        // Agrega más restricciones según sea necesario
    };

    // Verificar si la especie seleccionada cumple con las restricciones
    const restrictionsForSelectedSpecies = restrictions[selectedSpecies];
    const existingSpecies = Array.from(selectedSpeciesList.children).map(item => item.textContent.trim());

    if (restrictionsForSelectedSpecies.every(species => !existingSpecies.includes(species))) {
        // La especie cumple con las restricciones, se puede agregar a la lista

        searchResults.addEventListener("click", function(event) {
            const selectedSpecies = event.target.textContent.trim();
            fishModal.style.display = "none"; // Cierra el modal

            if (!selectedSpeciesSet.has(selectedSpecies)) {
                const listItem = document.createElement("li");
                const speciesText = document.createElement("span");
                speciesText.textContent = "Especie seleccionada: " + selectedSpecies;
                listItem.appendChild(speciesText);

                const quantitySelector = document.createElement("div");
                quantitySelector.classList.add("quantity-selector");

                const decreaseBtn = document.createElement("button");
                decreaseBtn.classList.add("quantity-btn");
                decreaseBtn.textContent = "-";
                decreaseBtn.addEventListener("click", function() {
                    const quantityDisplay = quantitySelector.querySelector(".quantity-display");
                let quantity = parseInt(quantityDisplay.textContent);
                if (quantity > 1) {
                    quantity--;
                    quantityDisplay.textContent = quantity;
                     // Multiplicar el tamaño del acuario por la cantidad
                const datosEs = peces[selectedSpecies];
                const tamañoAc = datosEs.tamañoAcuario.min * quantity;
                alert("Tamaño del acuario total:" + tamañoAc);
          
                }
            });
    
            const quantityDisplay = document.createElement("span");
            quantityDisplay.textContent = "1"; // Cantidad inicial
            quantityDisplay.classList.add("quantity-display");
    
            const increaseBtn = document.createElement("button");
            increaseBtn.classList.add("quantity-btn");
            increaseBtn.textContent = "+";
            increaseBtn.addEventListener("click", function() {
                const quantityDisplay = quantitySelector.querySelector(".quantity-display");
                let quantity = parseInt(quantityDisplay.textContent);
                quantity++;
                quantityDisplay.textContent = quantity;
                 // Multiplicar el tamaño del acuario por la cantidad
                 const datosEspecie = peces[selectedSpecies];
                 const tamañoAc = datosEspecie.tamañoAcuario.min * quantity;
                 alert("Tamaño del acuario total:" + tamañoAc);   
           
            });
        } else {
            // Incrementar el contador del elemento seleccionado
            const listItem = Array.from(selectedSpeciesList.children).find(item => item.textContent.includes(selectedSpecies));
            const quantityDisplay = listItem.querySelector(".quantity-display");
            let quantity = parseInt(quantityDisplay.textContent);
            quantity++;
            quantityDisplay.textContent = quantity;
            fishModal.style.display = "none"; // Cierra el modal
            }

                               // Mostrar el mensaje con los datos de la especie seleccionada
                               if (peces[selectedSpecies]) {
                                const datosEspecie = peces[selectedSpecies];
                                let mensaje = `Datos de la especie "${selectedSpecies}":\n`;
                                mensaje += `Tamaño del acuario: ${datosEspecie.tamañoAcuario.min} litros (mínimo)\n`;
                                mensaje += `Temperatura del agua: ${datosEspecie.temperatura.min} - ${datosEspecie.temperatura.max} °C\n`;
                                mensaje += `pH del agua: ${datosEspecie.pH.min} - ${datosEspecie.pH.max}\n`;
                                mensaje += `Dureza del agua: ${datosEspecie.durezaAgua.min} - ${datosEspecie.durezaAgua.max} dH\n`;
                                mensaje += `Nitritos: ${datosEspecie.nitritos.max} mg/L (máximo)\n`;
                                mensaje += `Nitratos: ${datosEspecie.nitratos.max} mg/L (máximo)\n`;
                                mensaje += `Amoniaco: ${datosEspecie.amoniaco.max} mg/L (máximo)\n`;
                                mensaje += `Salinidad: ${datosEspecie.salinidad.min} - ${datosEspecie.salinidad.max} (mínimo - máximo)\n`;
                                alert(mensaje);
                            } else {
                                alert(`La especie "${selectedSpecies}" no tiene datos disponibles.`);
                            } // Agregar la especie al conjunto de especies seleccionadas
                            selectedSpeciesSet.add(selectedSpecies);
                        
                



      
    
            quantitySelector.appendChild(decreaseBtn);
            quantitySelector.appendChild(quantityDisplay);
            quantitySelector.appendChild(increaseBtn);
            


         // Calculamos la posición vertical del quantity-selector
            const listItemRect = listItem.getBoundingClientRect();
            const listItemTop = listItemRect.top + window.scrollY;
            quantitySelector.style.position = "relative";
            quantitySelector.style.top = `${listItemTop}px`;
            quantitySelector.style.left = "300px"; // Ajusta la posición horizontal según sea necesario
    
   
      
        
    
        listItem.appendChild(quantitySelector);
    
        const selectedSpeciesList = document.getElementById("selectedSpeciesList");
        selectedSpeciesList.insertBefore(listItem, selectFishBtn.parentNode);    
        searchBar.value = "";
        adjustSelectFishBtnPosition();

        // Agregar la especie al conjunto de especies seleccionadas
        selectedSpeciesSet.add(selectedSpecies);
                        
                        });
                    
                    
        }     
        else  {
            alert(`No se puede agregar la especie "${selectedSpecies}" según las restricciones.`);
        }
    




    

    
    function adjustSelectFishBtnPosition() {
        const selectedSpeciesList = document.getElementById("selectedSpeciesList");
        const selectFishBtn = document.getElementById("selectFishBtn");
        const listItem = document.createElement("li");
        const listHeight = selectedSpeciesList.offsetHeight;
    }
    
        

    const selectedSpeciesSet = new Set();





    const peces = {
        Goldfish: {
            tamañoAcuario: { min: 75 },
            temperatura: { min: 24, max: 27  },
            pH: { min: 6.5, max: 7.5  },
            durezaAgua: { min: 5, max: 20 },
            nitritos: { max: 0.25 },
            nitratos: { max: 20 },
            amoniaco: { max: 0.25 },
            salinidad: { min: 0, max: 0.25 },
        },
        Guppy: {
            tamañoAcuario: { min: 20},
            temperatura: { min: 24, max: 27  },
            pH: { min: 7.0, max: 8.0  },
            durezaAgua: { min: 8, max: 12 },
            nitritos: { max: 0.5 },
            nitratos: { max: 40 },
            amoniaco: { max: 0.25 },
            salinidad: { min: 0, max: 0.25 },
        },
        "Tortuga orejas rojas": {
            tamañoAcuario: { min: 283},
            temperatura: { min: 24, max: 27  },
            pH: { min: 150, max: 300  },
            durezaAgua: { min: 8, max: 12 },
            nitritos: { max: 0.5 },
            nitratos: { max: 40 },
            amoniaco: { max: 0.25 },
            salinidad: { min: 0, max: 0.25 },
        },
        "Pez leon": {
            tamañoAcuario: { min: 114 },
            temperatura: { min: 24, max: 27  },
            pH: { min: 8.1, max: 8.4  },
            durezaAgua: { min: 5, max: 20 },
            nitritos: { max: 0.25 },
            nitratos: { max: 20 },
            amoniaco: { max: 0.25 },
            salinidad: { min: 1.022, max: 1.025 },
        },
        
    };

});



