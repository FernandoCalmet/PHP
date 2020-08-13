<!-- Modal -->
<div class="modal fade" id="reservar_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservaModalLabel">Reservar campo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Id. <?php echo $row['id']; ?></p>
                <p>Nombre del campo<?php echo $row['nombre']; ?></p>
                <p>Descripcion <?php echo $row['descripcion']; ?></p>
                <p>Correo <?php echo $row['correo']; ?></p>
                <p>Telefono <?php echo $row['telefono']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="/reservar_campo?id_campo=<?php echo $row['id']; ?>&id_usuario=<?php echo $usuario->id; ?>" class="btn btn-primary text-white">Confirmar reserva</a>
            </div>
        </div>
    </div>
</div>
<!-- enf Modal -->