<?php
$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . $rutaProyecto[1] .'/core/Connection.php';

class Paciente extends Connection
{
    private $documento;
    private $nombre;
    private $direccion;
    private $telefono;
    private $fecha_nacimiento;
    private $estado;
    private $genero;
    private $eps;

    public function __construct($doc = null, $nom = null, $dir = null, $tel = null, $fec = null, $est =
    null, $gen = null, $_eps = null)
    {
        $this->documento = $doc;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
        $this->fecha_nacimiento = $fec;
        $this->estado = $est;
        $this->genero = $gen;
        $this->eps = $_eps;
        parent::__construct();
    }
    public function getAll()
    {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM paciente");
            // Ejecutamos
            $sql->execute();
            $resultSet = null;
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    public function insertpacientesModel(){
        try{
            $sql = $this->dbConnection->prepare("INSERT INTO paciente (documento, nombre, direccion, telefono, fecha_nacimiento, estado, genero, eps) VALUES  (?,?,?,?,?,?,?,?)");

            $sql ->bindParam(1,$this->documento);
            $sql ->bindParam(2,$this->nombre);
            $sql ->bindParam(3,$this->direccion);
            $sql ->bindParam(4,$this->telefono);
            $sql ->bindParam(5,$this->fecha_nacimiento);
            $sql ->bindParam(6,$this->estado);
            $sql ->bindParam(7,$this->genero);
            $sql ->bindParam(8,$this->eps);

            $sql->execute();

        }catch(PDOException $ex){
            echo $ex->getMessage();
            die;
        }
    }
    /**
     * Get the value of documento
     */
    public function getDocumento()
    {
        return $this->documento;
    }
    /**
     * Set the value of documento
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
        return $this;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Set the value of direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }
    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * Set the value of telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    /**
     * Get the value of fecha_nacimiento
     */
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    /**
     * Set the value of fecha_nacimiento
     *
     * @return self
     */
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }
    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Set the value of estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }
    /**
     * Set the value of genero
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
        return $this;
    }
    /**
     * Get the value of eps
     */
    public function getEps()
    {
        return $this->eps;
    }
    /**
     * Set the value of eps
     *
     * @return self
     */
    public function setEps($eps)
    {
        $this->eps = $eps;
        return $this;
    }
}
