<?php
require "body.php";

include_once '../controllers/Paciente.control.php';
// Se crea una instancia de la clase PacienteControl
$paciente_obj = new PacienteControl();
// Se llama al método que lista a todos los pacientes
$pacientes = $paciente_obj->list_pacientes();
?>
<script src="../js/main.js"></script>
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
<!--EndModal----------------------------------------------------------------------------------------------->

<!--Modal-->
<!-- See -->
<div class="modal fade" id="verUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!--EndModal----------------------------------------------------------------------------------------------->