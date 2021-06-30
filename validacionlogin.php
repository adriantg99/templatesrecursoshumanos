<?php
$usuarioLog=$_POST['UsuarioLogin'];
$contraLog=$_POST['ConstraseñaLogin'];
session_start();
$_SESSION['UsuarioLogin']=$usuarioLog;

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'trayectoria_academica'
);

$consulta="SELECT*FROM usuarios Where usuario='$usuarioLog' and contrasena='$contraLog'";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:registro.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">El usuario o contraseña son incorrectos.</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);