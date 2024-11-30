<footer id="footer" class="py-16 text-center text-sm text-black dark:text-white/70">
   SAGOP. Todos los derechos reservados©. 2024.
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
        lastScrollTop = scrollTop;
    });
</script>