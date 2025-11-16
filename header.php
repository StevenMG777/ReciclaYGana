<?php
// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si hay usuario logueado
$isLoggedIn = isset($_SESSION['id_usu']) && isset($_SESSION['nombre']);
$userName = $isLoggedIn ? $_SESSION['nombre'] : '';
$userInitial = $isLoggedIn ? strtoupper(substr($userName, 0, 1)) : '';
?>

<header>
    <div class="marcoencabezamiento">
        <div class="textoencabezamiento">
            <img class="logo" src="img/reciclajelogo.png" alt="Recicla y Gana Logo">
            <h1>RECICLA Y GANA</h1>
        </div>
    </div>
    
    <nav>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="menu" id="mainMenu">
            <ul>
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="conocenos.php" class="nav-link">Conócenos</a></li>
                <li><a href="premios.php" class="nav-link">Premios</a></li>
            </ul>
            
            <!-- User Session Area -->
            <div class="user-session">
                <?php if ($isLoggedIn): ?>
                    <!-- Usuario logueado -->
                    <div class="user-menu" id="userMenu">
                        <button class="user-button" onclick="toggleUserMenu()">
                            <div class="user-avatar"><?php echo $userInitial; ?></div>
                            <span><?php echo htmlspecialchars($userName); ?></span>
                            <span style="font-size: 0.7rem;">▼</span>
                        </button>
                        <div class="user-dropdown">
                            <a href="panel-usuario.php">
                                <span>👤</span>
                                <span>Panel de Usuario</span>
                            </a>
                            <a href="mis-puntos.php">
                                <span>⭐</span>
                                <span>Mis Puntos</span>
                            </a>
                            <a href="cerrar-sesion.php">
                                <span>🚪</span>
                                <span>Cerrar Sesión</span>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Usuario no logueado -->
                    <a href="inisesion.php" class="login-btn">Iniciar Sesión</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

<script>
// Toggle menú móvil
const menuToggle = document.getElementById('menuToggle');
const mainMenu = document.getElementById('mainMenu');

if (menuToggle) {
    menuToggle.addEventListener('click', function() {
        mainMenu.classList.toggle('active');
        this.classList.toggle('active');
    });
}

// Toggle user menu
function toggleUserMenu() {
    const userMenu = document.getElementById('userMenu');
    userMenu.classList.toggle('active');
}

// Cerrar menú al hacer clic fuera
document.addEventListener('click', function(event) {
    const userMenu = document.getElementById('userMenu');
    if (userMenu && !userMenu.contains(event.target)) {
        userMenu.classList.remove('active');
    }
});

// Active state en navegación
const currentLocation = window.location.pathname.split('/').pop();
const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    if (linkPath === currentLocation || (currentLocation === '' && linkPath === 'index.php')) {
        link.classList.add('active');
    }
});

// Header scroll effect
let lastScroll = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
});
</script>