<?php
$reservasUsuario = new stdClass();
$reservasUsuario->id = (int)$usuario->id;
$usuarioReservasData = new CampoData();
$rowsReservas = $usuarioReservasData->getUsuarioAllReservas($reservasUsuario);
?>
<!-- Modal -->
<div class="modal fade" id="mostrar_mis_reservas" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservaModalLabel">Mis reservas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre del campo</th>
                            <th scope="col">Fecha de reserva</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rowsReservas as $rowReservas) { ?>
                            <tr>
                                <th scope="row"><?php echo $rowReservas['id']; ?></th>
                                <td><?php echo $rowReservas['campo_nombre']; ?></td>
                                <td><?php echo $rowReservas['fecha_reserva']; ?></td>
                                <td><?php echo $rowReservas['estado']; ?></td>  
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- enf Modal -->