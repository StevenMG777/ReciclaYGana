<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de Inicio de Sesión - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .error-container {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .error-card {
            max-width: 500px;
            width: 100%;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            text-align: center;
            animation: shake 0.5s ease-in-out;
        }
        
        .error-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            animation: bounce 1s ease-in-out infinite;
        }
        
        .error-card h1 {
            color: #dc3545;
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .error-message {
            color: var(--text-gray);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .error-reasons {
            background: #fff3cd;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            text-align: left;
        }
        
        .error-reasons h3 {
            color: #856404;
            font-size: 1rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .error-reasons ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .error-reasons li {
            color: #856404;
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .error-reasons li::before {
            content: '•';
            position: absolute;
            left: 0;
            font-weight: bold;
        }
        
        .button-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .btn {
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-green), var(--hover-green));
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(47, 169, 25, 0.3);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary-green);
            border: 2px solid var(--primary-green);
        }
        
        .btn-secondary:hover {
            background: rgba(47, 169, 25, 0.05);
        }
        
        .help-link {
            margin-top: 2rem;
            color: var(--text-gray);
            font-size: 0.9rem;
        }
        
        .help-link a {
            color: var(--primary-green);
            font-weight: 600;
            text-decoration: none;
        }
        
        .help-link a:hover {
            text-decoration: underline;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @media (max-width: 480px) {
            .error-card {
                padding: 2rem;
            }
            
            .error-icon {
                font-size: 4rem;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="error-container">
        <div class="error-card">
            <div class="error-icon">❌</div>
            
            <h1>Datos Incorrectos</h1>
            
            <p class="error-message">
                No pudimos iniciar sesión con los datos proporcionados. 
                Por favor, verifica tu información e intenta nuevamente.
            </p>
            
            <div class="error-reasons">
                <h3>Posibles causas:</h3>
                <ul>
                    <li>Usuario o contraseña incorrectos</li>
                    <li>Cuenta no registrada</li>
                    <li>Mayúsculas/minúsculas incorrectas</li>
                    <li>Espacios adicionales en el usuario</li>
                </ul>
            </div>
            
            <div class="button-group">
                <a href="inisesion.php" class="btn btn-primary">Intentar de Nuevo</a>
                <a href="registrarse.php" class="btn btn-secondary">Crear Cuenta</a>
            </div>
            
            <p class="help-link">
                ¿Olvidaste tu contraseña? 
                <a href="recuperar.php">Recupérala aquí</a>
            </p>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        // Auto-redirect después de 10 segundos
        setTimeout(function() {
            const redirectMessage = document.createElement('p');
            redirectMessage.style.color = '#999';
            redirectMessage.style.fontSize = '0.9rem';
            redirectMessage.style.marginTop = '1rem';
            redirectMessage.textContent = 'Redirigiendo en 5 segundos...';
            document.querySelector('.error-card').appendChild(redirectMessage);
            
            setTimeout(function() {
                window.location.href = 'inisesion.php';
            }, 5000);
        }, 5000);
    </script>
</body>
</html>