<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion = mysqli_connect("localhost", "root", "", "registro");

$consulta="SELECT*FROM datos where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h3 class="text-white">ERROR DE AUTENTIFICACION COMPROBAR USUARIO O CONTRASEÑA</h3>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>

