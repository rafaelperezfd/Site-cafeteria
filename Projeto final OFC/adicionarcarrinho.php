<?php
 ?>
<?php
include_once "func.php";
if (!isset($_POST["id_producto"])) {
    exit("Produto não existe");
}
agregarProductoAlCarrito($_POST["id_producto"]);
header("Location: catalogo.php");
