<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (isset($_SESSION['usuario'])) {
    header("Location: /");
}

$message = '';
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
                        <h1 class="breadcrumbs-title mb-17">Iniciar Sesión</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li class="active">Login</li>
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
                <div class="col-lg-12">
                    <div class="login-side">
                        <div class="sec-title">
                            <h2 class="title">Login</h2>
                        </div>
                        <form class="login-form">
                            <label class="input-label">Correo electronico<span>*</span></label>
                            <input class="input-control" type="email" name="email" required>
                            <label class="input-label">Contraseña <span>*</span></label>
                            <input class="input-control" type="password" name="password" required>
                            <div class="login-control">
                                <ul>
                                    <li><button type="submit" class="readon">Iniciar Sesión</button></li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Remember"> Recordarme
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <a class="psw-recover" href="#">¿Olvidaste tu contraseña?</a>
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