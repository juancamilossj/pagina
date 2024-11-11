<?php 

include("db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $usuario= trim($_POST['usuario']);
	    $correo = trim($_POST['correo']);
	    $numero = date($_POST['numero']);
        $contraseña= trim($_POST['contraseña']);
        $direccion= trim($_POST['direccion']);
	    $consulta = "INSERT INTO datos(usuario, email, numero , contraseña,direccion) VALUES ('$usuario','$correo','$numero','$contraseña','$direccion')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="text-light">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
        <h3 class="bad">¡Upsss algo salio mal!</h3>
        <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>


