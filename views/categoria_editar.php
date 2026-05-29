<?php
/** @var array $cat Viene de CategoriaController */
include "header.php"; 
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0">Editar Categoría</h3>
            </div>
            <form action="index.php?c=Categoria&a=actualizar" method="POST" class="card-body">
                <input type="hidden" name="id" value="<?php echo $cat['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nombre de la Categoría</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $cat['nombre']; ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?c=Categoria" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>