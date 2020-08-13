<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use PDO;
use PDOException;

require __DIR__ . '/IConexionDAO.php';

final class ConexionDAO implements IConexionDAO
{
    public function mysql()
    {
        $host = 'localhost';
        $dbname = 'club_deportivo';
        $user = 'root';
        $password = 'root';

        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
