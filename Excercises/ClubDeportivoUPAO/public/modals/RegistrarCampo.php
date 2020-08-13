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
                <form method="post" action="/reservas">
                    <div class="form-group">
                        <label class="input-label">Nombre del campo<span class="req">*</span></label>
                        <input class="form-control" type="text" name="txtName" required="">
                    </div>

                    <div class="form-group">
                        <label class="input-label">Descripcion del campo<span class="req">*</span></label>
                        <textarea class="form-control" rows="3" name="txtDescription" required=""></textarea>
                    </div>
                    <div class="form.group">
                        <button class="readon" type="submit" name="submit_registro">Confirmar registro</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                
            </div>
        </div>
    </div>
</div>
<!-- enf Modal -->