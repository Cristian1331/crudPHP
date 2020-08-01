<?php
include_once '../controllers/Paciente.control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$paciente_obj = new PacienteControl();

$opcion = isset($_POST['txtopcion']) ? $_POST['txtopcion'] : "";

switch ($opcion) {
    case 'insertar':
        $documento = isset($_POST['txtdocumento']) ? $_POST['txtdocumento'] : "";
        $nombre = isset($_POST['txtnombre']) ? $_POST['txtnombre'] : "";
        $direccion = isset($_POST['txtdireccion']) ? $_POST['txtdireccion'] : "";
        $telefono = isset($_POST['txttel']) ? $_POST['txttel'] : "";
        $fecha_nacimiento = isset($_POST['txtnacimiento']) ? $_POST['txtnacimiento'] : "";
        $estado = isset($_POST['txtestado']) ? $_POST['txtestado'] : "";
        $genero = isset($_POST['selectGenero']) ? $_POST['selectGenero'] : "";
        $eps = isset($_POST['txteps']) ? $_POST['txteps'] : "";

// Se crea una instancia de la clase PacienteControl
        // Se llama al método que lista a todos los pacientes
        $pacientes = $paciente_obj->insertPaciente($documento, $nombre, $direccion, $telefono, $fecha_nacimiento, $estado, $genero, $eps);

        if ($pacientes) {
            echo '<div class="alert-success text-center">
        <strong>Usuario con Documento :' . $documento . ' creado exitosamente</strong>
    </div>';
        } else {
            echo '<div class="alert alert-info  text-center" role="alert">
        <strong>USUARIO EXISTENTE O ERROR EN SISTEMA</strong>
    </div>';

        }
        break;
        
        }

?>

</body>
</html>