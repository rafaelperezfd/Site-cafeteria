<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
h1{
    background-color: brown;
    width: 1500px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}

.product-list {
    display: flex;
    flex-wrap: wrap;
}


.product {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    width: 200px;
}


.product h3 {
    font-size: 18px;
    margin-bottom: 5px;
}


.product p {
    font-size: 14px;
    margin-bottom: 10px;
}


.product p.price {
    font-size: 16px;
    color: green;
}
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
button {
    background-color: black;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: gray;
}
  </style>


<body>



    <h1>Produtos no carrinho</h1>

    <?php 
include_once "func.php";
$productos = obtenerProductosEnCarrito();
?>

<div class="product-list">
    <?php
    foreach ($productos as $producto) {
        echo '<div class="product">';
        echo '<h3>' . $producto->nombre . '</h3>';  
        echo '<p>' . $producto->descripcion . '</p>';
        echo '<p class="price">Preço: $' . $producto->precio . '</p>';
        echo '</div>';
    }
    ?>
</div>

<footer>
    <div class="container">
        <p>&copy; 2023 Sua Empresa. Todos os direitos reservados <br>
        Desenvolvido por Armani.
        <button onclick="voltarPaginaInicial()">Voltar à Página Inicial</button>
        </p>
    </div>
</footer>
<script>
    function voltarPaginaInicial() {
       
        window.location.href = "index.php";
    }
</script>





    


</body>
</html>


