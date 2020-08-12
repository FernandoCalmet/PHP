<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: /");
}

echo "Tienes que iniciar sesión";
?>