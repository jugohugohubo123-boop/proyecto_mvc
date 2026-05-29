<?php
require_once "config/conexion.php";

class AlumnoModel {
    public static function listar() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insertar($nombre, $apellido, $correo) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO alumnos (nombre, apellido, correo) VALUES (:nombre, :apellido, :correo)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":correo", $correo);
        return $stmt->execute();
    }

    public static function obtenerPorId($id) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $nombre, $apellido, $correo) {
        $stmt = Conexion::conectar()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido, correo = :correo WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":correo", $correo);
        return $stmt->execute();
    }

    public static function eliminar($id) {
        $stmt = Conexion::conectar()->prepare("DELETE FROM alumnos WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}