<?php
include 'conexion.php';

class ControladorLogin
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function iniciarSesion()
    {
        if (isset($_POST['email']) && isset($_POST['contrasenia'])) {
            $emailIngresado = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $email = filter_var($emailIngresado, FILTER_VALIDATE_EMAIL);
            $contrasenia = htmlspecialchars($_POST['contrasenia']);

            if ($email && $contrasenia) {
                $sql = "SELECT `id` FROM `registrologin` WHERE `email` = :email AND `contrasenia` = :contrasenia";
                $parametros = array(':email' => $email, ':contrasenia' => $contrasenia);
                $idLog = $this->conexion->consultar($sql, $parametros);

                if ($idLog) {
                    session_start();
                    // Variables de sesion con el id del administrador logueado
                    $_SESSION['id'] = $idLog[0]['id'];
                    $_SESSION['admin'] = $email;
                    header('location:admin/admin.php');
                } else {
                    echo "<script>alert('no logueado')</script>";
                }
            } else {
                echo "<script>alert('Datos de inicio de sesión inválidos')</script>";
            }
        }
    }
}

// Instancia del controlador y llamada al método iniciarSesion
$controladorLogin = new ControladorLogin();
$controladorLogin->iniciarSesion();
?>
