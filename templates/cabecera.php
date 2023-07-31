<?php
    session_start();
    include '../controlador.php'; 
    $current_page = $_SERVER['PHP_SELF']; //pagina actual
    $eActivo="border-radius: 5px; background-color: rgb(245, 245, 245); color: rgb(141, 29, 107);" //estilos de navbar activo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/index.php" ? "Muriel Vitale | Inicio" : ""); ?>
        <?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/eventos.php" ? "Muriel Vitale | Eventos" : ""); ?>
        <?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/presupuestos.php" ? "Muriel Vitale | Presupuesto" : ""); ?>
        <?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/contacto.php" ? "Muriel Vitale | Contacto" : ""); ?>
    </title>
    <meta name="description" content="Tienda online de ropa y accesorios para damas" />
    <meta name="keywords" content="ropa, accesorios, tendencia, damas, moda, disenadora" />
    <meta name="author" content="MurielVitale" />
    <meta name="robots" content="index, follow" />
    <meta name="locality" content="madrid, spain, europa">
    <meta name="revisit-after" content="7 days">
    <meta name="category" content="Moda mujer">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css"> 
</head>
<body>
    <header class="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/index.php" ? "fondoLogo" : "fondoLogoP"); ?>">
        <img id="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/index.php" ? "logo_princ" : "logo_princP"); ?>" src="../assets/images/logomarieEP2.png" alt="Marie Thompson" title="Marie Thompson" />
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navegacion" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link anchorNavegacion" href="index.php" style="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/index.php" ? $eActivo : ""); ?>">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle anchorNavegacion" href="#" style="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/bodas.php" || $current_page == "/cursoPHP/Proyecto_Muriel/views/corporativos.php" || $current_page == "/cursoPHP/Proyecto_Muriel/views/celebraciones.php" ? $eActivo : ""); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            EVENTOS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../views/corporativos.php">Corporativos</a></li>
                            <li><a class="dropdown-item" href="../views/bodas.php">Bodas</a></li>
                            <li><a class="dropdown-item" href="../views/celebraciones.php">Celebraciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link anchorNavegacion" href="presupuestos.php" style="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/presupuestos.php" ? $eActivo : ""); ?>">PRESUPUESTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link anchorNavegacion" href="contacto.php" style="<?php echo($current_page == "/cursoPHP/Proyecto_Muriel/views/contacto.php" ? $eActivo : ""); ?>">CONTACTO</a>
                    </li>

                    <?php if(isset($_SESSION['admin']) && $_SESSION['admin']) {?>
                        <li class="nav-item">
                            <a class="nav-link anchorNavegacion" href="../admin/admin.php">ADMIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchorNavegacion" href="../cerrar.php">CERRAR SESION</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contenedor">