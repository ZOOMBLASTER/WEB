document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.querySelector(".search__input");
    const searchResults = document.querySelector(".search__results");
    const originalResults = Array.from(searchResults.children); // Copia de los elementos originales

    // Ocultar la lista de resultados al principio
    searchResults.style.display = "none";

    searchBar.addEventListener("input", function () {
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
        return originalResults.filter(function (item) {
            const itemName = item.textContent.toLowerCase();
            return itemName.includes(searchValue);
        });
    }

    function displayResults(filteredResults) {
        searchResults.innerHTML = "";
        filteredResults.forEach(function (item) {
            const listItem = document.createElement("li");
            const link = document.createElement("a");
            link.textContent = item.textContent;
            link.href = item.querySelector("a").getAttribute("href");
            listItem.appendChild(link);
            listItem.classList.add("search__result"); // Agregar clase de estilo
            searchResults.appendChild(listItem);
        });
    }

    function displayNoResults() {
        searchResults.innerHTML = "<li class='search__result'>No hay resultados</li>";
    }

    function clearResults() {
        searchResults.innerHTML = "";
    }
});
