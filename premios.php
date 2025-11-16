<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premios - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/premios.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include 'header.php'; 
    ?>
    
    <div class="seccion-premios">
        <!-- Hero Section -->
        <div class="premios-hero">
            <h1>🎁 Nuestros Premios 🎁</h1>
            <h2 class="premios-subtitle">¡Convierte tus puntos en recompensas!</h2>
            <p class="premios-description">
                Cada acción de reciclaje suma puntos que puedes canjear por productos útiles para ti y tu educación.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="premios-stats">
            <div class="stat-item">
                <div class="stat-icon">🏆</div>
                <div class="stat-value">12</div>
                <div class="stat-label">Categorías</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🎯</div>
                <div class="stat-value">40+</div>
                <div class="stat-label">Premios Disponibles</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">✨</div>
                <div class="stat-value">50</div>
                <div class="stat-label">Puntos Mínimos</div>
            </div>
        </div>

        <div class="contenido-premios">
            <div class="container-premios">
                
                <!-- Útiles Escolares -->
                <div class="categoria-premio">
                    <h2>📚 Útiles Escolares</h2>
                    <div class="grid-premios">
                        <div class="tarjeta-premio">
                            <div class="icono-premio">✏️</div>
                            <h3>Kit de Lápices</h3>
                            <p class="descripcion">Set de 5 lápices de colores de excelente calidad</p>
                            <div class="puntos">50 puntos</div>
                            <button class="btn-canjear" onclick="canjearPremio('Kit de Lápices', 50)">Canjear</button>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">📓</div>
                            <h3>Cuaderno</h3>
                            <p class="descripcion">Cuaderno de 100 hojas rayado</p>
                            <div class="puntos">80 puntos</div>
                            <button class="btn-canjear" onclick="canjearPremio('Cuaderno', 80)">Canjear</button>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🎒</div>
                            <h3>Morral Escolar</h3>
                            <p class="descripcion">Morral resistente y espacioso para el colegio</p>
                            <div class="puntos">300 puntos</div>
                            <button class="btn-canjear" onclick="canjearPremio('Morral Escolar', 300)">Canjear</button>
                        </div>
                    </div>
                </div>

                <!-- Alimentos -->
                <div class="categoria-premio">
                    <h2>🍎 Alimentos</h2>
                    <div class="grid-premios">
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🥪</div>
                            <h3>Refrigerio</h3>
                            <p class="descripcion">Sándwich saludable + jugo natural</p>
                            <div class="puntos">60 puntos</div>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🍕</div>
                            <h3>Almuerzo</h3>
                            <p class="descripcion">Almuerzo completo en la cafetería del colegio</p>
                            <div class="puntos">100 puntos</div>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🧃</div>
                            <h3>Snack Saludable</h3>
                            <p class="descripcion">Fruta fresca + bebida natural</p>
                            <div class="puntos">40 puntos</div>
                        </div>
                    </div>
                </div>

                <!-- Entretenimiento -->
                <div class="categoria-premio">
                    <h2>🎮 Entretenimiento</h2>
                    <div class="grid-premios">
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🎫</div>
                            <h3>Entrada Cine</h3>
                            <p class="descripcion">Boleta para cine local en cualquier función</p>
                            <div class="puntos">200 puntos</div>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">📚</div>
                            <h3>Libro</h3>
                            <p class="descripcion">Libro de tu elección del catálogo disponible</p>
                            <div class="puntos">150 puntos</div>
                        </div>
                        <div class="tarjeta-premio">
                            <div class="icono-premio">🎨</div>
                            <h3>Kit de Arte</h3>
                            <p class="descripcion">Set completo de pintura y dibujo</p>
                            <div class="puntos">180 puntos</div>
                        </div>
                    </div>
                </div>

                <!-- Premios Especiales -->
                <div class="categoria-premio">
                    <h2>🏆 Premios Especiales</h2>
                    <div class="grid-premios">
                        <div class="tarjeta-premio especial">
                            <div class="icono-premio">🌟</div>
                            <h3>Reconocimiento Eco-Líder</h3>
                            <p class="descripcion">Certificado oficial + medalla + premio sorpresa</p>
                            <div class="puntos">500 puntos</div>
                        </div>
                        <div class="tarjeta-premio especial">
                            <div class="icono-premio">🎓</div>
                            <h3>Descuento Global</h3>
                            <p class="descripcion">Tarjeta de descuento para eventos y actividades escolares</p>
                            <div class="puntos">400 puntos</div>
                        </div>
                        <div class="tarjeta-premio especial">
                            <div class="icono-premio">🌱</div>
                            <h3>Kit de Siembra</h3>
                            <p class="descripcion">Plantas + macetas + tierra + guía de cultivo</p>
                            <div class="puntos">250 puntos</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CTA Section -->
        <div class="inicio">
            <a href="micuenta.php">
                <h1>Ver mis puntos disponibles</h1>
            </a>
        </div>

        <!-- Footer Message -->
        <div class="premios-footer">
            <h3>🌍 ¡Mientras más recicles, más premios podrás obtener! 🌍</h3>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        // Función para canjear premios
        function canjearPremio(nombre, puntos) {
            <?php if (isset($_SESSION['id_usu'])): ?>
                if (confirm('¿Deseas canjear ' + nombre + ' por ' + puntos + ' puntos?')) {
                    // Aquí iría la lógica real para canjear el premio
                    window.location.href = 'canjear-premio.php?premio=' + encodeURIComponent(nombre) + '&puntos=' + puntos;
                }
            <?php else: ?>
                alert('Debes iniciar sesión para canjear premios');
                window.location.href = 'inisesion.php';
            <?php endif; ?>
        }
        
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.categoria-premio').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>