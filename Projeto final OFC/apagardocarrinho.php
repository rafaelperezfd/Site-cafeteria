<?php
 ?>
<?php
include_once "func.php";
if (!isset($_POST["id_producto"])) {
    exit("Não há produto");
}
quitarProductoDelCarrito($_POST["id_producto"]);

if (isset($_POST["redireccionar_carrito"])) {
    header("Location: vercarrinho.php");
} else {
    header("Location: catalogo.php");
}
