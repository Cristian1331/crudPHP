

<?php
include_once '../controllers/Paciente.control.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php
    // Se crea una instancia de la clase PacienteControl
    $paciente_obj = new PacienteControl();
    // Se llama al método que lista a todos los pacientes
    $pacientes = $paciente_obj->list_pacientes();
    ?>
    <div class="container-fluid backg1">

    </div>
    <div class="container rounded mt-3" style="background-color: #cacaca ;">
        <h1>Gestionar Pacientes</h1>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#crearusu">
                    Insertar
                </button>
            </div>

            <div class="col">
                <a class="btn btn-success btn-lg" href="#" role="button">Exportar Excel</a>
            </div>
        </div>
        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Documento</th>
                    <th scope="col" class="d-none d-sm-block">Telefono</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody id="usuTest">
                <?php if ($pacientes != null) {
                    foreach ($pacientes as $item) { ?>
                        <tr>
                            <td><?php echo $item->nombre; ?></td>
                            <td><?php echo $item->documento; ?></td>
                            <td class="d-none d-sm-block"><?php echo $item->telefono; ?></td>
                            <td>
                                <a class="btn btn-warning btn-lg verDatos col-12 col-lg-3 mt-2 mt-lg-0" role="button" data-toggle="modal" data-target="#verPaciente" id="<?php echo $item->documento; ?>">Ver <i class="fas fa-eye" style="font-size:12pt"></i></a>

                                <a class="btn  btn-primary btn-lg editPaciente col-12 col-lg-3 mt-2 mt-lg-0" role="button" data-toggle="modal" data-target="#modaleditar" id="<?php echo $item->documento; ?>">Editar <i class="fas fa-edit" style="font-size:12pt"></i></a>

                                <a class="btn  btn-danger btn-lg deletePaciente col-12 col-lg-3 mt-2 mt-lg-0" role="button" data-toggle="modal" data-target="#EliminarPaciente" id="<?php echo $item->documento; ?>">Eliminar <i class="fas fa-trash" style="font-size:12pt"></i></a>
                            </td>
                        </tr>
                <?php } } ?>
            </tbody>
               
        </table>

    </div>

    <br>


    <!--Modal-->
    <!-- Insertar -->
    <div class="modal fade" id="crearusu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar paciente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Body-->
                    <form name="" action="pacienteProcess.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for=""><b>Documento</b></label>
                                <input type="number" class="form-control" name="txtdocumento" id="txtdocumento">
                            </div>
                            <div class="col">
                                <label for=""><b>Nombre</b></label>
                                <input type="text" class="form-control" name="txtnombre" id="txtnombre">
                            </div>
                            <div class="col">
                                <label for=""><b>Dirección</b></label>
                                <input type="text" class="form-control" name="txtdireccion" id="txtdireccion">
                            </div>
                            <div class="col">
                                <label for=""><b>Teléfono</b></label>
                                <input type="number" class="form-control" name="txttel" id="txttel">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col">
                                <label for=""><b>Fecha de nacimiento</b></label>
                                <input type="date" class="form-control" name="txtnacimiento" id="txtnacimiento">
                            </div>
                            <div class="col">
                                <label>Estado</label>
                                <select class="custom-select" name="txtEstado" id="txtEstado">
                                    <option selected>Choose...</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Genero</label>
                                </div>
                                <select class="custom-select" name="txtgenero" id="txtgenero">
                                    <option selected>Choose...</option>
                                    <option value="M">Hombre</option>
                                    <option value="F">Mujer</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for=""><b>eps</b></label>
                                <input type="text" class="form-control" id="txteps" name="txteps">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="txtopcion" id="txtopcion" value="insertar">
                    </form>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button id="sendDatos" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--EndModal-->
    <script>
        function cambiar() {

            document.getElementById("hola").innerHTML = "esto es un cambio";

        }

        document.getElementById("sendDatos").onclick = function() {

        }
    </script>
    <div class="container-fluid backg1"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>