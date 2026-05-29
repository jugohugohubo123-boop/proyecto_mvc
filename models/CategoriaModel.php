<?php
require_once "config/conexion.php";

class CategoriaModel {
    public static function listar() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM categorias");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insertar($nombre) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO categorias (nombre) VALUES (:nombre)");
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public static function obtenerPorId($id) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM categorias WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $nombre) {
        $stmt = Conexion::conectar()->prepare("UPDATE categorias SET nombre = :nombre WHERE id = :id");
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public static function eliminar($id) {
        $stmt = Conexion::conectar()->prepare("DELETE FROM categorias WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
