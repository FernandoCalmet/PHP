<!-- Modal -->
<div class="modal fade" id="registrar_campo" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservaModalLabel">Registrar campo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    nombre, telefono, descripcion
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="/registrar_campo?id_usuario=<?php echo $usuario->id; ?>&nombre=texto&telefono=texto&descripcion=texto" class="btn btn-primary text-white">Confirmar registro</a>
            </div>
        </div>
    </div>
</div>
<!-- enf Modal -->