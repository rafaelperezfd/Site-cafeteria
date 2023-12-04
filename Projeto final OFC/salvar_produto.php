<?php
?>
<?php
if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"])) {
    exit("Falta dados");
}
include_once "func.php";
guardarProducto($_POST["nombre"], $_POST["precio"], $_POST["descripcion"]);
header("Location: produtos.php");
