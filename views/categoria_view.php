<?php
/** @var array $datos Viene de CategoriaController */
include "header.php"; 
?>

<div class="card shadow">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Listado de Categorías</h3>
        <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalCat">Nueva Categoría</button>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($datos)): ?>
                    <tr><td colspan="3" class="text-center">No hay categorías.</td></tr>
                <?php else: ?>
                    <?php foreach ($datos as $cat): ?>
                    <tr>
                        <td><?php echo $cat['id']; ?></td>
                        <td><?php echo $cat['nombre']; ?></td>
                        <td>
                            <a href="index.php?c=Categoria&a=editar&id=<?php echo $cat['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?c=Categoria&a=eliminar&id=<?php echo $cat['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para Nueva Categoría -->
<div class="modal fade" id="modalCat" tabindex="-1">
    <div class="modal-dialog">
        <form action="index.php?c=Categoria&a=guardar" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nombre de Categoría</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>