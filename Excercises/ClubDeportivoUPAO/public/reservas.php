<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';
require __DIR__ . '/forms/CampoData.php';

$message = '';
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
                    <h4 style="color: #214790;">Bienvenido <b><?php echo $usuario->nombre ?> </b>!</h4>
                    <div class="regi-side">
                        <div class="sec-title">
                            <h2 class="title">Reserva tu campo deportivo preferido</h2>
                            <h5 style="color: red;"><?php echo $message ?></h5>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['telefono']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
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