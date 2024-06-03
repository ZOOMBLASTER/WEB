document.addEventListener("DOMContentLoaded", function () {

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe normalmente

    // Enviar datos al servidor utilizando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/controlador.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Manejar la respuesta del servidor
            var response = JSON.parse(xhr.responseText);
            var messageDiv = document.getElementById('message');
            if (response.status === 'success') {
                messageDiv.className = 'success';
            } else {
                messageDiv.className = 'fail';
            }
            messageDiv.textContent = response.message;
        }
    };
    var formData = new FormData(document.getElementById('registerForm'));
    xhr.send(new URLSearchParams(formData));
});
});