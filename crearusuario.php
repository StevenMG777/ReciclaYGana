<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "reciclaygana";


$conexion = mysqli_connect($servidor,$usuario, "",$basededatos);

$activo=true;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$password_hash = $_POST['password_hash'];
$query0 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado0 = mysqli_query($conexion,$query0);
if(mysqli_num_rows($resultado0)>0)
    {
    echo "<script>alert('El nombre de usuario ya existe');window.history.go(-1);</script>";
}
$clave = $_POST['password_hash'];
$clave2 = $_POST['claveconfirm'];
if ($clave !== $clave2){
    header("Location: registrarse.php");
    exit();
}
$password_hash = password_hash($clave, PASSWORD_DEFAULT);
   $query = "INSERT INTO usuarios (nombre, apellido, correo, usuario, password_hash, celular)
    VALUES('$nombre', '$apellido', '$correo', '$usuario', '$password_hash', '$celular' )";
    $resultado = mysqli_query($conexion,$query);
    if(!empty($resultado)){
        header("Location: inisesion.php");
    }
    else{
        echo "<script> alert('No se guardó');</script>";
    }
    $conexion -> close();
?>
