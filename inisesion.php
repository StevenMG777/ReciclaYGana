<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="auth-container">
        <form class="login" method="POST" action="conexion.php" id="loginForm">
            <h1>Iniciar Sesión</h1>
            
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" 
                       name="usuario" 
                       id="usuario" 
                       class="login-input" 
                       placeholder="Ingresa tu usuario" 
                       autofocus 
                       required
                       autocomplete="username">
                <span class="error-message">Por favor ingresa tu usuario</span>
            </div>
            
            <div class="input-group">
                <label for="clave">Contraseña</label>
                <input type="password" 
                       name="clave" 
                       id="clave" 
                       class="login-input" 
                       placeholder="Ingresa tu contraseña" 
                       required
                       autocomplete="current-password">
                <span class="error-message">Por favor ingresa tu contraseña</span>
            </div>
            
            <button type="submit" class="login-submit">Iniciar Sesión</button>
            <div class="divider">
                <span>o</span>
            </div>
            
            <a href="registrarse.php" class="btn-secondary-link">Crear una cuenta nueva</a>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        // Form validation
        const loginForm = document.getElementById('loginForm');
        
        loginForm.addEventListener('submit', function(e) {
            let isValid = true;
            const inputs = this.querySelectorAll('.login-input');
            
            inputs.forEach(input => {
                const inputGroup = input.closest('.input-group');
                
                if (!input.value.trim()) {
                    inputGroup.classList.add('error');
                    isValid = false;
                } else {
                    inputGroup.classList.remove('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                loginForm.classList.add('error');
                setTimeout(() => loginForm.classList.remove('error'), 500);
            } else {
                // Show loading state
                const submitBtn = this.querySelector('.login-submit');
                submitBtn.classList.add('loading');
            }
        });
        
        // Remove error on input
        document.querySelectorAll('.login-input').forEach(input => {
            input.addEventListener('input', function() {
                this.closest('.input-group').classList.remove('error');
            });
        });
    </script>
</body>
</html>