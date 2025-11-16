<footer>
    <div class="marcopie">
        <div class="footer-content">
            <!-- Sección Acerca de -->
            <div class="footer-section">
                <h3>Recicla y Gana</h3>
                <p>
                    Transformando residuos en oportunidades. Un programa eco-educativo de la I.E. José Miguel de Restrepo y Puerta.
                </p>
                <div class="eco-badge">
                    Compromiso Verde 2025
                </div>
            </div>
            
            <!-- Enlaces Rápidos -->
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="conocenos.php">Conócenos</a></li>
                    <li><a href="premios.php">Premios</a></li>
                    <li><a href="inisesion.php">Iniciar Sesión</a></li>
                    <li><a href="registrarse.php">Registrarse</a></li>
                </ul>
            </div>
            
            <!-- Contacto -->
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul class="contact-info">
                    <li>I.E. José Miguel de Restrepo y Puerta</li>
                    <li><a href="mailto:reciclaygana@colegio.edu.co">reciclaygana@gmail.com</a></li>
                    <li><a href="tel:+573001234567">+57 300 123 4567</a></li>
                </ul>
                <div class="social-media">
                    <a href="#" class="social-icon" aria-label="Facebook" title="Facebook">📘</a>
                    <a href="#" class="social-icon" aria-label="Instagram" title="Instagram">📷</a>
                    <a href="#" class="social-icon" aria-label="Twitter" title="Twitter">🐦</a>
                    <a href="#" class="social-icon" aria-label="WhatsApp" title="WhatsApp">💬</a>
                </div>
            </div>
            
            <!-- Newsletter -->
            <div class="footer-section">
                <h3>Boletín Informativo</h3>
                <p>Mantente al día con nuestras novedades y consejos ecológicos.</p>
                <form class="newsletter-form" onsubmit="return false;">
                    <input type="email" 
                           class="newsletter-input" 
                           placeholder="Tu correo electrónico" 
                           required>
                    <button type="submit" class="newsletter-btn">Suscribirse</button>
                </form>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="textopie">
                <p>&copy; <?php echo date('Y'); ?> Recicla y Gana - Todos los derechos reservados</p>
                <div class="footer-credits">
                    <span>Hecho con 💚 por estudiantes de 10°</span>
                    <span>•</span>
                    <a href="#">Política de Privacidad</a>
                    <span>•</span>
                    <a href="#">Términos y Condiciones</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    // Newsletter form handler
    document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const emailInput = this.querySelector('.newsletter-input');
        const email = emailInput.value;
        
        if (email) {
            // Aquí iría la lógica para guardar el email
            alert('¡Gracias por suscribirte! Te mantendremos informado.');
            emailInput.value = '';
        }
    });
    
    // Smooth scroll for footer links
    document.querySelectorAll('.footer-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
</script>