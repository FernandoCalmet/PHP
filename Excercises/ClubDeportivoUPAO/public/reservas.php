<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

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
                    <div class="regi-side">
                        <div class="sec-title">
                            <h2 class="title">Reserva tu campo deportivo</h2>
                            <h4 style="color: red;"><?php echo $message ?></h4>
                        </div>
                        <div>
                            Tabla con lista de campos
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