<?php
$camposUsuario = new stdClass();
$camposUsuario->correo = $usuario->correo;
$usuarioCamposData = new CampoData();
$rowsCampos = $usuarioCamposData->getUsuarioAllCampos($camposUsuario);
?>
<!-- Modal -->
<div class="modal fade" id="mostrar_mis_campos_<?php echo $usuario->correo;?>" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservaModalLabel">Mis campos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Descripcion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rowsCampos as $rowCampos) { ?>
                            <tr>
                                <th scope="row"><?php echo $rowCampos['id']; ?></th>
                                <td><?php echo $rowCampos['nombre']; ?></td>
                                <td><?php echo $rowCampos['correo']; ?></td>
                                <td><?php echo $rowCampos['telefono']; ?></td>
                                <td><?php echo $rowCampos['descripcion']; ?></td>
                                <td><a class="btn btn-sm btn-danger text-white" href="/eliminar_campo?id_campo=<?php echo $row['id']; ?>&id_usuario=<?php echo $usuario->id; ?>">Eliminar</a></td>
                                <?php include __DIR__ . '/../forms/EliminarCampo.php'; ?>
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