<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';
require __DIR__ . '/forms/PostData.php';

if (isset($_SESSION['usuario'])) {
    header("Location: /");
}

$message = '';

if (isset($_POST['txtEmail']) && isset($_POST['txtPassword']) && isset($_POST['txtPasswordConfirm']) && isset($_POST['txtName']) && isset($_POST['txtPhone']) && isset($_POST['txtDNI'])) {
    if (!empty($_POST['txtEmail']) && !empty($_POST['txtPassword']) && !empty($_POST['txtPasswordConfirm']) && !empty($_POST['txtName']) && !empty($_POST['txtPhone']) && !empty($_POST['txtDNI'])) {
        if ($_POST['txtPassword'] == $_POST['txtPasswordConfirm']) {
            $usuario = new stdClass();
            $usuario->correo = filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL);
            $usuario->password = hash('sha512', $_POST['txtPassword']);
            $usuario->nombre = filter_var($_POST['txtName'], FILTER_SANITIZE_STRIPPED);
            $usuario->telefono = filter_var($_POST['txtPhone'], FILTER_SANITIZE_STRIPPED);
            $usuario->dni = filter_var($_POST['txtDNI'], FILTER_SANITIZE_STRIPPED);
            $postdata = new PostData();
            $_SESSION['usuario'] = $postdata->registrarUsuario($usuario);
            $message = "El registro se realizo exitosamente!";
        } else {
            $message = "ERROR: Las contraseñas no coinciden.";
        }
    } else {
        $message = "ERROR: No se permiten campos vacios";
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
                        <h1 class="breadcrumbs-title mb-17">Registrar usuario</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li class="active">Registro</li>
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
                    <div class="regi-side">
                        <div class="sec-title">
                            <h2 class="title">Crear una cuenta</h2>
                            <h4 style="color: red;"><?php echo $message ?></h4>
                        </div>
                        <form class="register-form" id="register-form" method="post" action="/registro">

                            <label class="input-label">Correo <span class="req">*</span></label>
                            <input class="custom-placeholder" type="email" name="txtEmail" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">Contraseña <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="password" name="txtPassword" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">Confirmar Contraseña <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="password" name="txtPasswordConfirm" required="">
                                </div>
                            </div>

                            <label class="input-label">Nombre <span class="req">*</span></label>
                            <input class="custom-placeholder" type="text" name="txtName" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">Telefono <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="text" name="txtPhone" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">DNI <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="text" name="txtDNI" required="">
                                </div>
                            </div>

                            <div class="submit-btn">
                                <button class="readon" type="submit">Confirmar datos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Login End -->

    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>