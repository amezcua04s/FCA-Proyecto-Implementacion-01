<footer id="footer" class="footer py-2 text-center text-sm">
   SAGOP. ©Todos los derechos reservados. 2024.
</footer>

<!-- JavaScript para mostrar/ocultar el pie de página -->
<script>
    let lastScrollTop = 0;
    const footer = document.getElementById('footer');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Scroll hacia abajo
            footer.style.transform = 'translateY(100%)';
        } else {
            // Scroll hacia arriba
            footer.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Para evitar valores negativos en scrollTop
    });
</script>

<!-- Estilos CSS -->
<style>
    .footer {
        background-color: #000;
        color: #fff;
        font-size: 1rem; /* Tamaño de fuente más pequeño */
        font-family: 'Arial', sans-serif; /* Fuente diferente */
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 0.5rem 0; /* Padding más pequeño */
        transition: transform 0.3s ease;
        transform: translateY(0); /* Asegura que el footer esté visible inicialmente */
        z-index: 1000; /* Asegura que el footer esté por encima de otros elementos */
    }
</style>