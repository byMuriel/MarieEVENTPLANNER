<?php
    include '../conexion.php';

    class ControladorAdmin
    {
        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
        }

        public function obtenerEventos()
        {
            return $this->conexion->consultar("SELECT * FROM `evento`");
        }

        public function insertarEvento($datos)
        {
            $nombre = $datos['nombre'];
            $tipoEvento = $datos['tipoEvento'];
            $credito = $datos['credito'];
            $descripcion = $datos['descripcion'];
            $fechaE = $datos['fechaE'];

            $fecha = new DateTime();
            $imagen = $fecha->getTimestamp() . "_" . $_FILES['fotoE']['name'];
            $imagenTemporal = $_FILES['fotoE']['tmp_name'];
            move_uploaded_file($imagenTemporal, "../assets/fotosEventos/" . $imagen);

            $sql = "INSERT INTO `evento` (`id`, `nombre`, `tipoEvento`, `imagen`, `credito`, `descripcion`, `fechaE`) VALUES (NULL, '$nombre', '$tipoEvento', '$imagen', '$credito', '$descripcion', '$fechaE')";
            $this->conexion->ejecutar($sql);
            header("location:admin.php");
        }

        public function borrarEvento($id)
        {
            $imagen = $this->conexion->consultar("SELECT imagen FROM `evento` WHERE id=" . $id);
            unlink("../assets/fotosEventos/" . $imagen[0]['imagen']);
            $sql = "DELETE FROM `evento` WHERE `evento`.`id` =" . $id;
            $this->conexion->ejecutar($sql);
            header("location:admin.php");
        }
    }

    // Instancia del controlador y llamada a los métodos según corresponda
    $controladorAdmin = new ControladorAdmin();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $controladorAdmin->insertarEvento($_POST);
    } elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['borrar'])) {
        $id = $_GET['borrar'];
        $controladorAdmin->borrarEvento($id);
    }

    $eventos = $controladorAdmin->obtenerEventos();
?>
