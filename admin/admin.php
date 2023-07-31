<?php
  session_start();
  include 'controladorAdmin.php';
  $eActivo="font-weight: bold; border-radius: 5px; background-color: rgb(245, 245, 245); color: rgb(141, 29, 107);"; //estilos de navbar activo

  if(!$_SESSION['admin']){
    header('location:../login.php');
  }


?>

<!doctype html>
<html lang="en">
<head>
    <title>Registro de Evento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
</head>


<body class="fondoAdmin">
  <nav class="navbar navbar-light" style="background-color: #A8E9EB;">
    <nav class="navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="../views/index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/bodas.php">EVENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/presupuestos.php">PRESUPUESTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/contacto.php">CONTACTO</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="admin.php">ADMINISTRADOR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../cerrar.php">SALIR</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </nav><br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-12 right"><h4>Hola <?php echo $_SESSION['admin']; ?></h4></div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Datos del Evento:
          </div>
          <div class="card-body">
            <form action="admin.php" enctype="multipart/form-data" method="POST">
                  Nombre:
                  <input type="text" required class="form-control" name="nombre" id="nombre">
                  </br>
                  Tipo de Evento:
                  <select class="form-select" required name="tipoEvento" aria-label="Default select example">
                    <option selected>Selecciona uno</option>
                    <option value="boda">Boda</option>
                    <option value="corporativo">Corporativo</option>
                    <option value="celebracion">Celebracion</option>
                  </select>
                  </br>
                  Imagen:
                  <input type="file" required class="form-control" name="fotoE" id="fotoE">
                  </br>
                  Creditos Foto:
                  <input type="text" required class="form-control" name="credito" id="credito">
                  </br></br>
                  Descripcion del Producto:
                  <textarea class="form-control" required name="descripcion" id="descripcion" rows="3"></textarea>
                  </br>
                  Fecha del Evento:
                  <input type="date" required class="form-control" name="fechaE" id="fechaE">
                  </br></br>
                  <input class="btn btn-success" type="submit" value="Insertar">
            </form>
            
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo de Evento</th>
              <th scope="col">Imagen</th>
              <th scope="col">Credito</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Fecha</th>
              <th scope="col">
                
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($eventos as $unoPorUno) {?>
            <tr class="">
              <td><?php echo $unoPorUno['id']; ?></td>
              <td><?php echo $unoPorUno['nombre']; ?></td>
              <td><?php echo $unoPorUno['tipoEvento']; ?></td>
              <td>
                <?php //con esto podemos agregar la imagen 
                //si solo queremos agregar el nombre ponemos solo <?php echo $unoPorUno['imagen']; ?> 
                <img width="100" src="../assets/fotosEventos/<?php echo $unoPorUno['imagen']; ?>">
              </td>
              <td><?php echo $unoPorUno['credito']; ?></td>
              <td><?php echo $unoPorUno['descripcion']; ?></td>
              <td><?php echo $unoPorUno['fechaE']; ?></td>
              <td>
                <a class="btn btn-secondary" href="?borrar=<?php echo $unoPorUno['id'];?>">Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</body>