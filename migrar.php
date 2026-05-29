<?php
require_once "config/conexion.php";

try {
    $pdo = Conexion::conectar();
    
    // 1. Crear la tabla
    $sql_table = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100),
        usuario VARCHAR(50),
        password VARCHAR(255)
    )";
    $pdo->exec($sql_table);
    echo "Paso 1: Tabla 'usuarios' creada o ya existía.<br>";

    // 2. Verificar si el usuario ya existe para no duplicarlo
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE usuario = 'admin'");
    $stmt->execute();
    
    if (!$stmt->fetch()) {
        // 3. Insertar usuario admin (password: admin123)
        $pass = password_hash("admin123", PASSWORD_BCRYPT);
        $sql_insert = "INSERT INTO usuarios (nombre, usuario, password) VALUES ('Administrador', 'admin', :pass)";
        $stmt_insert = $pdo->prepare($sql_insert);
        $stmt_insert->execute([':pass' => $pass]);
        echo "Paso 2: Usuario 'admin' creado correctamente (password: admin123).<br>";
    } else {
        echo "Paso 2: El usuario 'admin' ya existe.<br>";
    }

    echo "<br><b>¡Todo listo! Ya puedes borrar este archivo (migrar.php) y continuar con el login.</b>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
