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
$nombre_usuario = $_SESSION['nombre'];

// Obtener información del usuario
$query = "SELECT * FROM usuarios WHERE id_usu = $id_usuario";
$resultado = mysqli_query($connection, $query);
$usuario = mysqli_fetch_assoc($resultado);

// Si no existe la columna puntos, se puede agregar con:
// ALTER TABLE usuarios ADD COLUMN puntos INT DEFAULT 0;
$puntos = isset($usuario['puntos']) ? $usuario['puntos'] : 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario - Recicla y Gana</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/panel-usuario.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="panel-container">
        <div class="panel-header">
            <h1>🌱 Panel de Usuario</h1>
            <p>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?></p>
        </div>
        
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card puntos-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-info">
                    <h3>Puntos Totales</h3>
                    <p class="stat-number"><?php echo $puntos; ?></p>
                </div>
            </div>
            
            <div class="stat-card reciclaje-card">
                <div class="stat-icon">♻️</div>
                <div class="stat-info">
                    <h3>Kg Reciclados</h3>
                    <p class="stat-number"><?php echo floor($puntos / 10); ?></p>
                </div>
            </div>
            
            <div class="stat-card premios-card">
                <div class="stat-icon">🎁</div>
                <div class="stat-info">
                    <h3>Premios Canjeados</h3>
                    <p class="stat-number">0</p>
                </div>
            </div>
            
            <div class="stat-card ranking-card">
                <div class="stat-icon">🏆</div>
                <div class="stat-info">
                    <h3>Ranking</h3>
                    <p class="stat-number">#1</p>
                </div>
            </div>
        </div>
        
        <!-- Información del Usuario -->
        <div class="user-info-section">
            <h2>📋 Mi Información</h2>
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Nombre:</span>
                    <span class="info-value"><?php echo htmlspecialchars($usuario['nombre'] . ' ' . $usuario['apellido']); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">UsuariO:</span>
                    <span class="info-value"><?php echo htmlspecialchars($usuario['usuario']); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Correo:</span>
                    <span class="info-value"><?php echo htmlspecialchars($usuario['correo']); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Celular:</span>
                    <span class="info-value"><?php echo htmlspecialchars($usuario['celular']); ?></span>
                </div>
            </div>
        </div>
        
        <!-- Acciones Rápidas -->
        <div class="quick-actions">
            <h2>⚡ Acciones Rápidas</h2>
            <div class="actions-grid">
                <a href="premios.php" class="action-card">
                    <div class="action-icon">🎁</div>
                    <h3>Ver Premios</h3>
                    <p>Canjea tus puntos</p>
                </a>
                
                <a href="mis-reciclajes.php" class="action-card">
                    <div class="action-icon">📊</div>
                    <h3>Historial</h3>
                    <p>Ver tu historial</p>
                </a>
                
                <a href="editar-perfil.php" class="action-card">
                    <div class="action-icon">✏️</div>
                    <h3>Editar Perfil</h3>
                    <p>Actualiza tus datos</p>
                </a>
                
                <a href="ayuda.php" class="action-card">
                    <div class="action-icon">❓</div>
                    <h3>Ayuda</h3>
                    <p>Preguntas frecuentes</p>
                </a>
            </div>
        </div>
        
        <!-- Actividad Reciente -->
        <div class="activity-section">
            <h2>📅 Actividad Reciente</h2>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">✅</div>
                    <div class="activity-info">
                        <h4>Te registraste exitosamente</h4>
                        <p>Hoy</p>
                    </div>
                    <div class="activity-points">+50 pts</div>
                </div>
                
                <div class="activity-item empty">
                    <p>Aún no hay más actividad. ¡Comienza a reciclar!</p>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>