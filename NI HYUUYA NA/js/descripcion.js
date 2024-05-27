document.addEventListener("DOMContentLoaded", function() {
    // Obtener todos los párrafos dentro del contenedor
    var paragraphs = document.querySelectorAll('.text-overlay p');
    // Iterar sobre cada párrafo
    paragraphs.forEach(function(paragraph) {
      // Añadir la clase "visible" para hacer que aparezca gradualmente
      paragraph.classList.add('visible');
    });
  });