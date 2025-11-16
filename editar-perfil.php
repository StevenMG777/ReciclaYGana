<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['id_usu']) || !isset($_SESSION['nombre'])) {
    header("Location: inisesion.php");
    exit();
}

// Conectar a la base de datos
include 'conexi.php';

$id_usuario = $_SESSION['id_usu'];
$mensaje = '';
$tipo_mensaje = '';

// Procesar actualización
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = mysqli_real_escape_string($connection, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($connection, $_POST['apellido']);
    $correo = mysqli_real_escape_string($connection, $_POST['correo']);
    $celular = mysqli_real_escape_string($connection, $_POST['celular']);
    
    // Actualizar contraseña solo si se proporciona
    if (!empty($_POST['nueva_password'])) {
        $nueva_password = password_hash($_POST['nueva_password'], PASSWORD_DEFAULT);
        $query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', celular='$celular', password_hash='$nueva_password' WHERE id_usu=$id_usuario";
    } else {
        $query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', celular='$celular' WHERE id_usu=$id_usuario";
    }
    
    if (mysqli_query($connection, $query)) {
        $_SESSION['nombre'] = $nombre;
        $mensaje = 'Perfil actualizado correctamente';
        $tipo_mensaje = 'success';
    } else {
        $mensaje = 'Error al actualizar el perfil';
        $tipo_mensaje = 'error';
    }
}

// Obtener datos actuales
$query = "SELECT * FROM usuarios WHERE id_usu = $id_usuario";
$resultado = mysqli_query($connection, $query);
$usuario = mysqli_fetch_assoc($resultado);

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .edit-container {
            max-width: 600px;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 600;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }
        
        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb;
        }
        
        .info-text {
            background: #fff3cd;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            color: #856404;
            font-size: 0.9rem;
            text-align: center;
        }
        
        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .btn-cancel {
            flex: 1;
            padding: 1rem;
            background: white;
            color: var(--text-gray);
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
            text-decoration: none;
            display: block;
        }
        
        .btn-cancel:hover {
            background: #f5f5f5;
            border-color: #ccc;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="edit-container">
        <form class="login" method="POST" id="editForm">
            <h1>✏️ Editar Perfil</h1>
            
            <?php if ($mensaje): ?>
                <div class="alert alert-<?php echo $tipo_mensaje; ?>">
                    <?php echo $mensaje; ?>
                </div>
            <?php endif; ?>
            
            <div class="input-group">
                <label for="nombre">Nombre</label>
                <input type="text" 
                       name="nombre" 
                       id="nombre" 
                       class="login-input" 
                       value="<?php echo htmlspecialchars($usuario['nombre']); ?>"
                       required>
            </div>
            
            <div class="input-group">
                <label for="apellido">Apellido</label>
                <input type="text" 
                       name="apellido" 
                       id="apellido" 
                       class="login-input" 
                       value="<?php echo htmlspecialchars($usuario['apellido']); ?>"
                       required>
            </div>
            
            <div class="input-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" 
                       name="correo" 
                       id="correo" 
                       class="login-input" 
                       value="<?php echo htmlspecialchars($usuario['correo']); ?>"
                       required>
            </div>
            
            <div class="input-group">
                <label for="celular">Celular</label>
                <input type="tel" 
                       name="celular" 
                       id="celular" 
                       class="login-input" 
                       value="<?php echo htmlspecialchars($usuario['celular']); ?>"
                       required
                       pattern="[0-9]{10}">
            </div>
            
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" 
                       class="login-input" 
                       value="<?php echo htmlspecialchars($usuario['usuario']); ?>"
                       disabled
                       style="background: #f5f5f5; color: #999;">
                <small style="color: #999; font-size: 0.85rem;">El nombre de usuario no se puede cambiar</small>
            </div>
            
            <hr style="margin: 2rem 0; border: none; border-top: 1px solid #e0e0e0;">
            
            <div class="info-text">
                💡 Solo completa estos campos si deseas cambiar tu contraseña
            </div>
            
            <div class="input-group">
                <label for="nueva_password">Nueva Contraseña (opcional)</label>
                <input type="password" 
                       name="nueva_password" 
                       id="nueva_password" 
                       class="login-input" 
                       placeholder="Dejar en blanco para no cambiar"
                       minlength="6">
            </div>
            
            <div class="input-group">
                <label for="confirmar_password">Confirmar Nueva Contraseña</label>
                <input type="password" 
                       name="confirmar_password" 
                       id="confirmar_password" 
                       class="login-input" 
                       placeholder="Confirmar nueva contraseña">
                <span class="error-message">Las contraseñas no coinciden</span>
            </div>
            
            <div class="button-group">
                <a href="panel-usuario.php" class="btn-cancel">Cancelar</a>
                <button type="submit" class="login-submit" style="flex: 2;">Guardar Cambios</button>
            </div>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <script>
        const editForm = document.getElementById('editForm');
        
        editForm.addEventListener('submit', function(e) {
            const nuevaPassword = document.getElementById('nueva_password').value;
            const confirmarPassword = document.getElementById('confirmar_password').value;
            
            // Validar contraseñas solo si se ingresó una nueva
            if (nuevaPassword || confirmarPassword) {
                if (nuevaPassword !== confirmarPassword) {
                    e.preventDefault();
                    document.getElementById('confirmar_password').closest('.input-group').classList.add('error');
                    return;
                }
            }
        });
        
        // Remove error on input
        document.getElementById('confirmar_password').addEventListener('input', function() {
            this.closest('.input-group').classList.remove('error');
        });
    </script>
</body>
</html>