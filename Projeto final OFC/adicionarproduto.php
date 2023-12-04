<?php
 ?>
<?php include_once "header.php" ?>
<div class="columns">
    <div class="column is-one-third">
        <h2 class="is-size-2">Novo produto</h2>
        <form action="salvar_produto.php" method="post">
            <div class="field">
                <label for="nombre">Nome</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nome" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descrição</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descrição" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Preço</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Preço">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success">Salvar</button>
                    <a href="produtos.php" class="button is-warning">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>