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
                <p>Nombre <?php echo $row['nombre']; ?></p>
                <p>Telefono <?php echo $row['telefono']; ?></p>
                <p>Descripcion <?php echo $row['descripcion']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Confirmar reserva</button>
            </div>
        </div>
    </div>
</div>
<!-- enf Modal -->