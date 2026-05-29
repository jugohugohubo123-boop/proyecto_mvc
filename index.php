 <?php
// Enrutador básico
$controlador = isset($_GET['c']) ? $_GET['c'] : 'Alumno';
$metodo = isset($_GET['a']) ? $_GET['a'] : 'index';

$nombreControlador = $controlador . "Controller";
$archivoControlador = "controllers/" . $nombreControlador . ".php";

if (file_exists($archivoControlador)) {
    require_once $archivoControlador;
    $mvc = new $nombreControlador();
    if (method_exists($mvc, $metodo)) {
        $mvc->$metodo();
    } else {
        die("El método no existe.");
    }
} else {
    die("El controlador no existe.");
}
