<?php
 ?>
<!DOCTYPE html>
<html lang="es">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<style>

    .navbaris-warning{
        background-color: black;
    }
    .navbar-item{
        color: rgb(184, 134, 50);

    }
    
    .buttonis-success{
        display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  border: 2px color(brown); 
  color: rgb(184, 134, 50); 
  background-color: #fff; 
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
  
    }

    .buttonis-primary{
        color: whitesmoke;
    }
    
    .navbar-item{
        width: 120px;
        height: 90px;
        
    }

    #img{
      margin-top: -40px;
    }

    .buttons{
        margin-top: -60px;
        width: 1000px;
    }

    #logo-text-110237 {
    font-family:  19pxRaleway arial sans-serif; /* Substitua 'Your Font Family' pelo nome da fonte desejada */
    font-size: 24px; /* Tamanho da fonte */
    font-weight: bold; /* Peso da fonte */
    color: white; /* Cor do texto */
    text-align: center; /* Alinhamento do texto */
}

#logo-text-110237 br {
    display: none; /* Esconder a quebra de linha, pois o texto está centralizado */
}

/* Adicione estilos adicionais conforme necessário para atender aos requisitos de design específicos */


</style>
<body>
<?php

$CaminhoImagem = 'C:\xampp\htdocs\carrinho\logo.PNG';
?>

    <nav class="navbaris-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                <img alt="" src="" style="max-height: 80px" />
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                
                <a class="navbar-item" href="catalogo.php">Cardapio</a>
                <a class="navbar-item" href="index.php">Tela de inicio</a>
                
            </div>
 
           <div >
           <h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-110237" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="LogoAlpha" >
                                                                                Rendez-Vous <br/>Cafe
                                    

           </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="vercarrinho.php" class="buttonis-success">
                            <strong>Ver carrinho <?php
                                                include_once "func.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="" class="buttonis-primary">
                            <strong>Suporte</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">