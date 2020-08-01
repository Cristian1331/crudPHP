<?php
$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . $rutaProyecto[1] . '/models/Paciente.class.php'; //require_once '../models/Paciente.class.php';

class PacienteControl
{
    public function insertPaciente($documento, $nombre, $direccion, $telefono, $fecha_nacimiento, $estado, $genero, $eps)
    {
        $paciente_obj = new Paciente($documento, $nombre, $direccion, $telefono, $fecha_nacimiento, $estado, $genero, $eps);
        $paciente = $paciente_obj->insertpacientesModel();
        return $paciente;

        /*INSERT INTO `paciente`(`documento`, `nombre`, `direccion`, `telefono`, `fecha_nacimiento`, `estado`, `genero`, `eps`)*/
    }

    public function list_pacientes()
    {
        $paciente_obj = new Paciente();
        $pacientes = $paciente_obj->getAll();
        return $pacientes;
    }
    public function select_paciente($documento)
    {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM paciente WHERE documento = ?");
        $sql->bindParam(1, $documento);
        // Ejecutamos
        $sql->execute();
        // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
        if ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            // Creacion de objeto de la clase paciente
            $pac_obj = new Paciente($row->documento, $row->nombre, $row->direccion, $row->telefono, $row->fecha_nacimiento, $row->estado, $row->genero, $row->eps);
        } else {
            $pac_obj = null;
        }
        return $pac_obj; // Se retorna el objeto de pacientes
    }
}
