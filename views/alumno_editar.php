<?php
/** @var array $alumno Viene de AlumnoController */
include "header.php"; 
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0">Editar Alumno</h3>
            </div>
            <form action="index.php?c=Alumno&a=actualizar" method="POST" class="card-body">
                <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $alumno['nombre']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" value="<?php echo $alumno['apellido']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" value="<?php echo $alumno['correo']; ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?c=Alumno" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-warning">Actualizar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>