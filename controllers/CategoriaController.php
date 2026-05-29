<?php
require_once "models/CategoriaModel.php";

class CategoriaController {
    public function index() {
        $datos = CategoriaModel::listar();
        require_once "views/categoria_view.php";
    }

    public function guardar() {
        if ($_POST) {
            CategoriaModel::insertar($_POST['nombre']);
        }
        header("Location: index.php?c=Categoria");
    }

    public function eliminar() {
        $id = $_GET['id'];
        CategoriaModel::eliminar($id);
        header("Location: index.php?c=Categoria");
    }

    public function editar() {
        $id = $_GET['id'];
        $cat = CategoriaModel::obtenerPorId($id);
        require_once "views/categoria_editar.php";
    }

    public function actualizar() {
        if ($_POST) {
            CategoriaModel::actualizar($_POST['id'], $_POST['nombre']);
        }
        header("Location: index.php?c=Categoria");
    }
}
