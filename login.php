<?php include 'controladorLogin.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    </br></br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    </br>
                    <div class="card-header text-center">
                        INICIO DE SESION || PANEL DE ADMINISTRADORES
                    </div>
                    <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese el correo</small></br></br>
                            
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese la contraseña</small></br></br>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="form-button btn btn-outline-primary">Entrar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div> 
</body>
</html>