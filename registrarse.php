<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="auth-container">
        <form class="login" method="POST" action="crearusuario.php" id="registerForm">
            <h1>Crear Cuenta</h1>
            
            <div class="input-group">
                <label for="nombre">Nombre</label>
                <input type="text" 
                       name="nombre" 
                       id="nombre" 
                       class="login-input" 
                       placeholder="Tu nombre" 
                       required
                       autocomplete="given-name">
                <span class="error-message">Por favor ingresa tu nombre</span>
            </div>
            
            <div class="input-group">
                <label for="apellido">Apellido</label>
                <input type="text" 
                       name="apellido" 
                       id="apellido" 
                       class="login-input" 
                       placeholder="Tu apellido" 
                       required
                       autocomplete="family-name">
                <span class="error-message">Por favor ingresa tu apellido</span>
            </div>
            
            <div class="input-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" 
                       name="correo" 
                       id="correo" 
                       class="login-input" 
                       placeholder="tu@email.com" 
                       required
                       autocomplete="email">
                <span class="error-message">Por favor ingresa un correo válido</span>
            </div>
            
            <div class="input-group">
                <label for="celular">Celular</label>
                <input type="tel" 
                       name="celular" 
                       id="celular" 
                       class="login-input" 
                       placeholder="3001234567" 
                       required
                       pattern="[0-9]{10}"
                       autocomplete="tel">
                <span class="error-message">Ingresa un número de 10 dígitos</span>
            </div>
            
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" 
                       name="usuario" 
                       id="usuario" 
                       class="login-input" 
                       placeholder="Elige un nombre de usuario" 
                       required
                       minlength="4"
                       autocomplete="username">
                <span class="error-message">Mínimo 4 caracteres</span>
            </div>
            
            <div class="input-group">
                <label for="password_hash">Contraseña</label>
                <input type="password" 
                       name="password_hash" 
                       id="password_hash" 
                       class="login-input" 
                       placeholder="Crea una contraseña segura" 
                       required
                       minlength="6"
                       autocomplete="new-password">
                <div class="password-strength">
                    <div class="password-strength-bar"></div>
                </div>
                <span class="error-message">Mínimo 6 caracteres</span>
            </div>
            
            <div class="input-group">
                <label for="claveconfirm">Confirmar Contraseña</label>
                <input type="password" 
                       name="claveconfirm" 
                       id="claveconfirm" 
                       class="login-input" 
                       placeholder="Confirma tu contraseña" 
                       required
                       autocomplete="new-password">
                <span class="error-message">Las contraseñas no coinciden</span>
            </div>
            
            <button type="submit" class="register">Crear Cuenta</button>
            
            <div class="divider">
                <span>o</span>
            </div>
            
            <a href="inisesion.php" class="btn-secondary-link">Ya tengo una cuenta</a>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        // Password strength indicator
        const passwordInput = document.getElementById('password_hash');
        const strengthBar = document.querySelector('.password-strength-bar');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 6) strength++;
            if (password.length >= 10) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;
            
            strengthBar.className = 'password-strength-bar';
            
            if (strength <= 2) {
                strengthBar.classList.add('weak');
            } else if (strength <= 4) {
                strengthBar.classList.add('medium');
            } else {
                strengthBar.classList.add('strong');
            }
        });
        
        // Form validation
        const registerForm = document.getElementById('registerForm');
        
        registerForm.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Validate all required fields
            const inputs = this.querySelectorAll('.login-input[required]');
            inputs.forEach(input => {
                const inputGroup = input.closest('.input-group');
                
                if (!input.value.trim()) {
                    inputGroup.classList.add('error');
                    isValid = false;
                } else {
                    inputGroup.classList.remove('error');
                }
            });
            
            // Validate email
            const emailInput = document.getElementById('correo');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                emailInput.closest('.input-group').classList.add('error');
                isValid = false;
            }
            
            // Validate phone
            const phoneInput = document.getElementById('celular');
            if (!/^[0-9]{10}$/.test(phoneInput.value)) {
                phoneInput.closest('.input-group').classList.add('error');
                isValid = false;
            }
            
            // Validate password match
            const password = document.getElementById('password_hash').value;
            const confirmPassword = document.getElementById('claveconfirm').value;
            
            if (password !== confirmPassword) {
                document.getElementById('claveconfirm').closest('.input-group').classList.add('error');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
                registerForm.classList.add('error');
                setTimeout(() => registerForm.classList.remove('error'), 500);
            } else {
                // Show loading state
                const submitBtn = this.querySelector('.register');
                submitBtn.classList.add('loading');
            }
        });
        
        // Remove error on input
        document.querySelectorAll('.login-input').forEach(input => {
            input.addEventListener('input', function() {
                this.closest('.input-group').classList.remove('error');
            });
        });
        
        // Validate password match in real-time
        document.getElementById('claveconfirm').addEventListener('input', function() {
            const password = document.getElementById('password_hash').value;
            const confirmPassword = this.value;
            const inputGroup = this.closest('.input-group');
            
            if (confirmPassword && password !== confirmPassword) {
                inputGroup.classList.add('error');
            } else {
                inputGroup.classList.remove('error');
            }
        });
    </script>
</body>
</html>