document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('dataForm');
    const loading = document.getElementById('loading');

    form.addEventListener('submit', function() {
        loading.style.display = 'flex'; // Mostrar el mensaje de "cargando"
    });
});