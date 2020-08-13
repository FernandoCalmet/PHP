<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';
require __DIR__ . '/forms/CampoData.php';

$message = '';
$time = null;
$usuario = new stdClass();

if (!isset($_SESSION['usuario'])) {
    header("Location: /login");
    $usuario = null;
} else {
    $usuario = $_SESSION['usuario'];

    $campo = new stdClass();
    $campoData = new CampoData();
    $rows = $campoData->getCampos($campo);
}

if (isset($_POST['txtName']) && isset($_POST['txtDescription']) && isset($_POST['submit_registro'])) {
    if (!empty($_POST['txtName']) && !empty($_POST['txtDescription'])) {
        $campoRegistrar = new stdClass();
        $campoRegistrar->usuarioId = $usuario->id;
        $campoRegistrar->nombre = $_POST['txtName'];
        $campoRegistrar->telefono = $usuario->telefono;
        $campoRegistrar->correo = $usuario->correo;
        $campoRegistrar->descripcion = $_POST['txtDescription'];
        $campoDataRegistro = new CampoData();
        $campoDataRegistro->registrarCampo($campoRegistrar);
        header("Location: /reservas");
    }
}

?>

<?php include __DIR__ . '/partials/head.php'; ?>

<body>
    <!--Full width header Start-->
    <div class="full-width-header">
        <?php include __DIR__ . '/partials/header.php'; ?>
    </div>
    <!--Full width header End-->

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="assets/images/breadcrumbs/inner2.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Reservas de campo deportivo</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li class="active">Reservas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Account Login Start -->
    <div id="rs-my-account" class="rs-my-account pt-100 md-pb-80 md-pt-80">
        <div class="container">
            <div class="row pb-100 md-pb-72">
                <div class="col-lg-12 md-mb-70">
                    <h4>Bienvenido <b style="color: #214790;"><?php echo $usuario->nombre ?> </b>!</h4>
                    <p>
                        <a class="btn btn-lg btn-success text-white" href="#registrar_campo" data-toggle="modal">Registrar un campo</a>
                        <a class="btn btn-lg btn-warning text-white" href="#mostrar_mis_campos_<?php echo $usuario->correo;?>" data-toggle="modal">Ver mis campos</a>
                        <a class="btn btn-lg btn-primary text-white" href="#mostrar_mis_reservas" data-toggle="modal">Ver mis reservas</a>
                    </p>
                    <?php include __DIR__ . '/modals/RegistrarCampo.php'; ?>
                    <?php include __DIR__ . '/modals/MostrarMisCampos.php'; ?>
                    <?php include __DIR__ . '/modals/MostrarMisReservas.php'; ?>
                    <div class="regi-side">
                        <div class="sec-title">
                            <h2 class="title">Reserva tu campo deportivo preferido</h2>
                            <h5 style="color: blue;"><?php echo $message ?></h5>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre del campo</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Telefono</th>                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><?php echo $row['correo']; ?></td>
                                            <td><?php echo $row['telefono']; ?></td>                                            
                                            <td><a class="btn btn-primary text-white" href="#reservar_<?php echo $row['id']; ?>" data-toggle="modal">Reservar</a></td>
                                            <?php include __DIR__ . '/modals/Reservas.php'; ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Login End -->
    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>