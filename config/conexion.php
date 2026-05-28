<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $db = "db_proyecto_mvc"; // <--- Aquí conectamos a tu nueva base de datos
        $user = "root";
        $password = "";

        try {
            // Creamos la conexión usando la librería PDO de PHP
            $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
            return $conexion;
        } catch (PDOException $e) {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }
}
