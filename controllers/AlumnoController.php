<?php
require_once "models/AlumnoModel.php";

class AlumnoController {
    public function index() {
        $datos = AlumnoModel::listar();
        require_once "views/alumno_view.php";
    }

    public function guardar() {
        if ($_POST) {
            AlumnoModel::insertar($_POST['nombre'], $_POST['apellido'], $_POST['correo']);
        }
        header("Location: index.php?c=Alumno");
    }

    public function eliminar() {
        $id = $_GET['id'];
        AlumnoModel::eliminar($id);
        header("Location: index.php?c=Alumno");
    }

    public function editar() {
        $id = $_GET['id'];
        $alumno = AlumnoModel::obtenerPorId($id);
        require_once "views/alumno_editar.php";
    }

    public function actualizar() {
        if ($_POST) {
            AlumnoModel::actualizar($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['correo']);
        }
        header("Location: index.php?c=Alumno");
    }
}