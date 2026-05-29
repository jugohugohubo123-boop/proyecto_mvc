<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema MVC - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        #wrapper {
            display: flex;
            width: 100%;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            width: 250px;
            margin-left: 0;
            transition: margin .25s ease-out;
            background-color: #212529;
            color: white;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 1.5rem 1.25rem;
            font-size: 1.2rem;
            font-weight: bold;
            border-bottom: 1px solid #495057;
        }
        #sidebar-wrapper .list-group {
            width: 250px;
        }
        #sidebar-wrapper .list-group-item {
            background-color: transparent;
            color: #adb5bd;
            border: none;
            padding: 1rem 1.5rem;
        }
        #sidebar-wrapper .list-group-item:hover {
            background-color: #343a40;
            color: white;
        }
        #sidebar-wrapper .list-group-item.active {
            background-color: #0d6efd;
            color: white;
        }
        #page-content-wrapper {
            flex: 1;
            padding: 20px;
        }
        .navbar-custom {
            background-color: white;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <span class="text-primary">SISTEMA</span> MVC
            </div>
            <div class="list-group list-group-flush">
                <a href="index.php?c=Alumno" class="list-group-item list-group-item-action <?php echo ($c == 'Alumno') ? 'active' : ''; ?>">
                    <i class="bi bi-people me-2"></i> Alumnos
                </a>
                <a href="index.php?c=Categoria" class="list-group-item list-group-item-action <?php echo ($c == 'Categoria') ? 'active' : ''; ?>">
                    <i class="bi bi-tags me-2"></i> Categorías
                </a>
                <hr class="mx-3 my-2 border-secondary">
                <a href="#" class="list-group-item list-group-item-action text-danger mt-auto">
                    <i class="bi bi-box-arrow-right me-2"></i> Salir (Próximamente)
                </a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-custom d-flex justify-content-between">
                <h4 class="mb-0"><?php echo isset($_GET['c']) ? $_GET['c'] : 'Alumnos'; ?></h4>
                <div class="user-info">
                    <small class="text-muted">Bienvenido, Desarrollador</small>
                </div>
            </nav>
            <div class="container-fluid">dor</small>
                </div>
            </nav>
            <div class="container-fluid">