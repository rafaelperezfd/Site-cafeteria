<?php
?>
<?php
if (!isset($_POST["id_producto"])) {
    exit("Não tem cadastro");
}

include_once "func.php";
eliminarProducto($_POST["id_producto"]);
header("Location: produtos.php");
