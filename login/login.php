<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <title>login</title>


</head>

<body>

  <body class="text-center" background="imagenes1/fondolicor.jpg">
    <div class="position-absolute top-50 start-50 translate-middle">
      <form class="row g-3 shadow-lg p-3 mb-5  rounded m-5 p-3 col-12 bg-white " action="validar.php" method="post">

        <main class="form-signin w-100 m-auto">
          <form>
            <img class="mb-4" src="imagenes1/login.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
              <input type="text" class="form-control col-12" id="floatingInput" name="usuario"
                placeholder="name@example.com">
              <label for="floatingInput">Usuario</label>
            </div>
            <br>
            <div class="form-floating">
              <input type="password" class="form-control col-12" id="floatingPassword" name="contraseña"
                placeholder="Password">
              <label for="floatingPassword">contraseña</label>
            </div>
            <br>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Acepto todos los terminos
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-warning" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted">© 2022</p>


          </form>
        </main>
      </form>
    </div>


  </body>

</html>