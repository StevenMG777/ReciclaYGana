<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recicla y Gana - Programa eco-educativo que transforma residuos en recompensas">
    <meta name="keywords" content="reciclaje, educación ambiental, premios, sostenibilidad">
    <meta name="author" content="Recicla y Gana">
    <title>Inicio - Recicla y Gana</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/reciclajelogo.png">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <!-- Main Content -->
    <main>
        <div class="marcocontenido">
            <?php include 'contenido.php'; ?>
        </div>
    </main>
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    
    <!-- Scripts opcionales -->
    <script>
        // Smooth scroll para toda la página
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Lazy loading para imágenes
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
        
        // Animación en scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.fade-in, .card, .stat-card, .feature-box').forEach(el => {
            fadeInObserver.observe(el);
        });
    </script>
</body>
</html>