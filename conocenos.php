<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/conocenos.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="conocenos-wrapper">
        
        <!-- Hero Section -->
        <section class="conocenos-hero">
            <div class="hero-content">
                <h1 class="hero-title">Conócenos</h1>
                <p class="hero-subtitle">Transformando el futuro, un material reciclable a la vez</p>
            </div>
        </section>
        
        <!-- Main Content -->
        <div class="conocenos-container">
            
            <!-- Quiénes Somos -->
            <section class="content-section fade-in">
                <div class="section-icon">🏫</div>
                <h2>Quiénes Somos</h2>
                <p>
                    <strong>Recicla y Gana</strong> es una iniciativa innovadora que nace en el núcleo de la 
                    Institución Educativa José Miguel de Restrepo y Puerta. Somos un proyecto que fusiona 
                    la educación ambiental con la tecnología y la economía de incentivos para crear un 
                    ecosistema virtuoso.
                </p>
                <p>
                    Nuestro equipo está conformado por estudiantes de 10° quienes administran la logística 
                    del programa, garantizando la transparencia y eficiencia del sistema de puntos y 
                    recompensas. Operamos como un puente directo entre la acción de reciclar y el beneficio 
                    tangible, transformando un deber ambiental en una oportunidad de ganar.
                </p>
            </section>
            
            <!-- Misión, Visión, Objetivo en cards -->
            <div class="mvo-grid">
                <div class="mvo-card">
                    <div class="mvo-icon">🎯</div>
                    <h3>Misión</h3>
                    <p>
                        Catalizar una cultura de responsabilidad ambiental proactiva facilitando un 
                        proceso logístico eficiente para la recolección, clasificación y pesaje de 
                        materiales reciclables. Estos puntos actúan como una moneda de cambio, 
                        empoderando a los estudiantes para que su compromiso ecológico se traduzca 
                        en beneficios directos.
                    </p>
                </div>
                
                <div class="mvo-card">
                    <div class="mvo-icon">🔭</div>
                    <h3>Visión</h3>
                    <p>
                        Consolidar "Recicla y Gana" como un modelo de gestión ambiental autosostenible 
                        y replicable. Proyectamos un futuro donde el 100% de los residuos aprovechables 
                        sean reincorporados a la cadena productiva y cada miembro de la comunidad educativa 
                        sea un agente de cambio consciente.
                    </p>
                </div>
                
                <div class="mvo-card">
                    <div class="mvo-icon">🌱</div>
                    <h3>Objetivo</h3>
                    <p>
                        Implementar y gestionar un sistema de economía circular basado en incentivos. 
                        Cuantificar y valorizar los residuos sólidos, convirtiéndolos en un activo 
                        canjeable por bienes de consumo, demostrando de manera tangible el valor 
                        inherente del reciclaje.
                    </p>
                </div>
            </div>
            
            <!-- Valores -->
            <section class="valores-section">
                <h2 class="section-title">Nuestros Valores</h2>
                <div class="valores-grid">
                    <div class="valor-item">
                        <div class="valor-icon">🌍</div>
                        <h4>Sostenibilidad</h4>
                        <p>Compromiso con prácticas que preserven el planeta</p>
                    </div>
                    <div class="valor-item">
                        <div class="valor-icon">🤝</div>
                        <h4>Colaboración</h4>
                        <p>Trabajo en equipo para un impacto positivo</p>
                    </div>
                    <div class="valor-item">
                        <div class="valor-icon">💡</div>
                        <h4>Innovación</h4>
                        <p>Tecnología al servicio del medio ambiente</p>
                    </div>
                    <div class="valor-item">
                        <div class="valor-icon">📚</div>
                        <h4>Educación</h4>
                        <p>Conciencia ambiental a través del conocimiento</p>
                    </div>
                </div>
            </section>
            
            <!-- Equipo -->
            <section class="team-section">
                <h2 class="section-title">Nuestro Equipo</h2>
                <p class="team-description">
                    Conoce a los estudiantes de 10° que hicieron posible este proyecto
                </p>
                
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-image-wrapper">
                            <img src="img/steven_macias.jpg" 
                                 alt="Steven Macias" 
                                 class="team-image" 
                                 onerror="this.src='img/avatar-default.jpg'">
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Steven Macias</h3>
                            <p class="team-role">Desarrollador</p>
                            <p class="team-bio">Diseño y experiencia de usuario</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image-wrapper">
                            <img src="img/stiven_velasquez.jpg" 
                                 alt="Stiven Velasquez" 
                                 class="team-image" 
                                 onerror="this.src='img/avatar-default.jpg'">
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Stiven Velasquez</h3>
                            <p class="team-role">Desarrollador</p>
                            <p class="team-bio">Monitoreo y sistema de puntos</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image-wrapper">
                            <img src="img/carlos_herrera.jpg" 
                                 alt="Carlos Herrera" 
                                 class="team-image" 
                                 onerror="this.src='img/avatar-default.jpg'">
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Carlos Herrera</h3>
                            <p class="team-role">Coordinador</p>
                            <p class="team-bio">Gestión de recolección y clasificación</p>
                        </div>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-image-wrapper">
                            <img src="img/alexander_gomez.jpg" 
                                 alt="Alexander Gomez" 
                                 class="team-image" 
                                 onerror="this.src='img/avatar-default.jpg'">
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Alexander Gomez</h3>
                            <p class="team-role">Analista</p>
                            <p class="team-bio">Lógica del sistema y base de datos</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- CTA -->
            <section class="cta-section">
                <div class="cta-content">
                    <h2>Únete a Nuestra Misión</h2>
                    <p>Sé parte del cambio que quieres ver en el mundo</p>
                    <a href="registrarse.php" class="cta-button">Comenzar a Reciclar</a>
                </div>
            </section>
            
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>