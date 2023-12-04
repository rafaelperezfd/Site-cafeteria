<?php
?>
<?php include_once "header.php" ?>
<?php
include_once "func.php";
$productos = obtenerProductos();
?>
<style>
    .container {
  display: inline-block;
  margin: 50px;
  overflow: hidden;

}
.imagem{
    transition: transform 0.3s ease-in-out;
    display: inline-block;

}
.imagem:hover{
    transform: scale(1.1);
}

.columnss{
    width: 380px;
   display: inline-block;
   margin: 35px;
   margin-right : 30px;
}



</style>
<div class="columnss">
    <div class="column">
        <h2 class="is-size-2">Cardapio</h2>
    </div>
</div>
<div class="container">
<img class="imagem" src="https://blog.coffeemais.com/wp-content/uploads/2022/04/dia-nacional-do-cafe-topo.jpg" alt="" width="350px" height="300px">
<img class="imagem" src="https://www.graogourmet.com/wp-content/uploads/2017/09/tipos-cafe-grao-gourmet.jpg" alt="" width="290px" height="280px">
<img  class="imagem" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3AdO2GxsAgU3emmw_duPlK-XQpRty1OCsMA&usqp=CAU" alt="" width="260px" height="300px">    
</div>


<?php foreach ($productos as $producto) { ?>

    <div class="columnss">
        <div class="column is-full">
            <div class="card">
                
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $producto->nombre ?>
                    </p>
                    
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $producto->descripcion ?>
                    </div>
                    <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="apagardocarrinho.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;No Carrinho
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Apagar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="adicionarcarrinho.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Adicionar ao carrinho
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>