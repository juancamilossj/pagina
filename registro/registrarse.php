<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<body background="../login/imagenes1/fondolicor.jpg">
    <div class="container "  >
        <form class="row g-3 shadow-lg p-3 mb-5 bg-body rounded m-5 p-3 " method="post" value="login.php" >
            <div>
                <img src="../login/imagenes1/Registro.png" alt="registro-personal" width="100" height="100" class="d-inline-block align-text-top rounded-5">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label" >Correo</label>
              <input type="email" class="form-control" name="correo"  required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label" >Contraseña</label>
              <input type="password" class="form-control"  name="contraseña"  required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label" >Usuario</label>
              <input type="text" class="form-control"  name="usuario" placeholder="jo...herna...1220" required>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label" >Numero de telefono</label>
              <input type="text" class="form-control"  name="numero" placeholder="3125674350" required>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label" >Direccion</label>
              <input type="text" class="form-control" name="direccion"  required>
            </div>
           
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck " required>
                <label class="form-check-label" for="gridCheck">
                  Acepta terminos y condicciones
                </label>
              </div>
            </div>
            <div class="col-12">
            <button type="submit" name="register"class="btn btn-primary">Registrarse</button>
            </div>
            <a href="../Inicio.php">volver</a>
          </form> 

        

          <?php
          include("registro.php");

          ?>

    </div>
   
    
</body>
</html>