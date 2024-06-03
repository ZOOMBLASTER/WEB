document.querySelector('btninicio').addEventListener('submit', async function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    try {
        const response = await fetch('../php/login.php', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();

        const messageDiv = document.getElementById('message');
        messageDiv.innerHTML = result.message;
        messageDiv.className = result.status === 'success' ? 'login__message--success' : 'login__message--fail';

        if (result.status === 'success') {
            window.location.href = '../php/perfil.php';
        }
    } catch (error) {
        console.error('Error:', error);
    }
});
