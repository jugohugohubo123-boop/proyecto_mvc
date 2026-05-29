<?php
/** @var array $datos Viene de AlumnoController */
include "header.php"; 
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Listado de Alumnos</h3>
        <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalAlumno">Nuevo Alumno</button>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $alumno): ?>
                <tr>
                    <td><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td><?php echo $alumno['apellido']; ?></td>
                    <td><?php echo $alumno['correo']; ?></td>
                    <td>
                        <a href="index.php?c=Alumno&a=editar&id=<?php echo $alumno['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="index.php?c=Alumno&a=eliminar&id=<?php echo $alumno['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para Nuevo Alumno -->
<div class="modal fade" id="modalAlumno" tabindex="-1">
    <div class="modal-dialog">
        <form action="index.php?c=Alumno&a=guardar" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrar Alumno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="required form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Alumno</button>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>