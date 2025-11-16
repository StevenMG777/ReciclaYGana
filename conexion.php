<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "RECICLAYGANA";


$conexion = mysqli_connect($servidor,$usuario, "",$basededatos);
$usu=$_POST['usuario'];
$clave=$_POST['clave'];

$sql="SELECT * FROM usuarios WHERE usuario='$usu'";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
    echo "Error en: $sql";
}
else{
    
    WHILE($row=mysqli_fetch_assoc($ejecutar)){
    $id=$row['id_usu'];
     $nombre=$row['nombre'];
     $apellido=$row['apellido'];
     $usu2=$row['usuario'];  
     $clave2=$row['password_hash'];
     ['correo'];
     ['celular'];
     if($usu==$usu2 && password_verify($clave, $clave2)){ 
        session_start();
        $_SESSION['id_usu']=$id;
        $_SESSION['nombre']=$nombre;
        echo "<script> window.location.href='panel-usuario.php'; </script>";

     } else {
         echo "<script> window.location.href='incorrecto.php'; </script>";
     }     
     }         
}