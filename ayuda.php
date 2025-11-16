<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ayuda.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="ayuda-container">
        <div class="ayuda-hero">
            <h1>Centro de Ayuda</h1>
            <p>¿Tienes alguna pregunta? Estamos aquí para ayudarte</p>
        </div>
        
        <div class="ayuda-content">
            
            <!-- Buscador -->
            <div class="search-box">
                <input type="text" id="searchFAQ" placeholder="Busca tu pregunta...">
                <button onclick="searchFAQ()">🔍</button>
            </div>
            
            <!-- Categorías de ayuda -->
            <div class="help-categories">
                <div class="category-card" onclick="filterFAQ('cuenta')">
                    <div class="category-icon">👤</div>
                    <h3>Mi Cuenta</h3>
                </div>
                <div class="category-card" onclick="filterFAQ('puntos')">
                    <div class="category-icon">⭐</div>
                    <h3>Puntos</h3>
                </div>
                <div class="category-card" onclick="filterFAQ('premios')">
                    <div class="category-icon">🎁</div>
                    <h3>Premios</h3>
                </div>
                <div class="category-card" onclick="filterFAQ('reciclaje')">
                    <div class="category-icon">♻️</div>
                    <h3>Reciclaje</h3>
                </div>
            </div>
            
            <!-- Preguntas Frecuentes -->
            <section class="faq-section">
                <h2>Preguntas Frecuentes</h2>
                
                <div class="faq-item" data-category="cuenta">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Cómo creo una cuenta?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Para crear una cuenta, haz clic en "Iniciar Sesión" en el menú superior, luego selecciona "Crear una cuenta nueva". Completa el formulario con tus datos personales y ¡listo!</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="cuenta">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Olvidé mi contraseña, qué hago?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>En la página de inicio de sesión, haz clic en "¿Olvidaste tu contraseña?". Introduce tu correo electrónico y te enviaremos las instrucciones para recuperarla.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="puntos">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Cómo gano puntos?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ganas puntos reciclando materiales en los puntos de recolección del colegio. Cada kilogramo reciclado suma puntos a tu cuenta según el tipo de material.</p>
                        <ul>
                            <li>Plástico: 10 puntos por kg</li>
                            <li>Papel: 8 puntos por kg</li>
                            <li>Vidrio: 15 puntos por kg</li>
                            <li>Metal: 20 puntos por kg</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item" data-category="puntos">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Los puntos expiran?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>No, tus puntos no expiran. Puedes acumularlos durante todo el año escolar y canjearlos cuando quieras.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="premios">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Cómo canjeo mis premios?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ve a la sección "Premios" en el menú, elige el premio que deseas y haz clic en "Canjear". El sistema verificará que tengas suficientes puntos y restará los puntos automáticamente.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="premios">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Dónde recojo mi premio?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Una vez canjeado el premio, dirígete a la coordinación del proyecto "Recicla y Gana" en el colegio. Presenta tu nombre de usuario y recibirás tu premio.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="reciclaje">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Qué materiales puedo reciclar?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Aceptamos los siguientes materiales:</p>
                        <ul>
                            <li>Plástico: Botellas, envases, bolsas limpias</li>
                            <li>Papel: Cuadernos, hojas, periódicos</li>
                            <li>Cartón: Cajas, empaques</li>
                            <li>Vidrio: Botellas, frascos</li>
                            <li>Metal: Latas de aluminio</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item" data-category="reciclaje">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Dónde están los puntos de recolección?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Los puntos de recolección están ubicados en:</p>
                        <ul>
                            <li>Entrada principal del colegio</li>
                            <li>Cafetería</li>
                            <li>Patio central</li>
                            <li>Coordinación académica</li>
                        </ul>
                        <p>Horario: Lunes a Viernes de 7:00 AM a 3:00 PM</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="cuenta">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>¿Puedo cambiar mis datos personales?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, puedes actualizar tu información en cualquier momento. Ve a tu panel de usuario y selecciona "Editar Perfil".</p>
                    </div>
                </div>
            </section>
            
            <!-- Contacto -->
            <section class="contact-section">
                <h2>¿No encontraste lo que buscabas?</h2>
                <p>Contáctanos directamente y te ayudaremos</p>
                <div class="contact-options">
                    <div class="contact-card">
                        <div class="contact-icon">📧</div>
                        <h3>Email</h3>
                        <p>reciclaygana@gmail.com</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">📱</div>
                        <h3>WhatsApp</h3>
                        <p>+57 322 723 4649</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">🏫</div>
                        <h3>Ubicación</h3>
                        <p>Coordinación</p>
                    </div>
                </div>
            </section>
            
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        function toggleFAQ(element) {
            const faqItem = element.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = element.querySelector('.faq-icon');
            
            // Cerrar otros FAQs
            document.querySelectorAll('.faq-item.active').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                    item.querySelector('.faq-icon').textContent = '+';
                }
            });
            
            // Toggle actual FAQ
            faqItem.classList.toggle('active');
            icon.textContent = faqItem.classList.contains('active') ? '−' : '+';
        }
        
        function filterFAQ(category) {
            const items = document.querySelectorAll('.faq-item');
            
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Scroll to FAQ section
            document.querySelector('.faq-section').scrollIntoView({ behavior: 'smooth' });
        }
        
        function searchFAQ() {
            const searchTerm = document.getElementById('searchFAQ').value.toLowerCase();
            const items = document.querySelectorAll('.faq-item');
            
            items.forEach(item => {
                const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    if (searchTerm) {
                        item.classList.add('active');
                        item.querySelector('.faq-icon').textContent = '−';
                    }
                } else {
                    item.style.display = 'none';
                }
            });
        }
        
        // Search on Enter
        document.getElementById('searchFAQ').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchFAQ();
            }
        });
    </script>
</body>
</html>