document.addEventListener("DOMContentLoaded", function() {
    let items = document.querySelectorAll('.art-slider .art-list .art-item');
    let next = document.getElementById('art-next');
    let prev = document.getElementById('art-prev');
    let thumbnails = document.querySelectorAll('.art-thumbnail .art-item');

    // Configuración de parámetros
    let countItem = items.length;
    let itemActive = 0;

    // Evento click en siguiente
    next.addEventListener('click', function() {
        itemActive = (itemActive + 1) % countItem;
        showSlider();
    });

    // Evento click en anterior
    prev.addEventListener('click', function() {
        itemActive = (itemActive - 1 + countItem) % countItem;
        showSlider();
    });

    // Función para mostrar el slider
    function showSlider() {
        // Eliminar la clase 'active' del item y miniatura activos anteriores
        document.querySelector('.art-slider .art-list .art-item.active').classList.remove('active');
        document.querySelector('.art-thumbnail .art-item.active').classList.remove('active');

        // Agregar la clase 'active' al nuevo item y miniatura activos
        items[itemActive].classList.add('active');
        thumbnails[itemActive].classList.add('active');
    }

    // Click en miniatura
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            itemActive = index;
            showSlider();
        });
    });

    // Auto ejecutar el slider
    let refreshInterval = setInterval(() => {
        next.click();
    }, 5000);

    // Limpiar intervalo al hacer hover sobre el slider
    document.querySelector('.art-slider').addEventListener('mouseenter', () => {
        clearInterval(refreshInterval);
    });

    // Reanudar intervalo al salir del hover sobre el slider
    document.querySelector('.art-slider').addEventListener('mouseleave', () => {
        refreshInterval = setInterval(() => {
            next.click();
        }, 5000);
    });
});
