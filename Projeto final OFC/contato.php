
<?php
?>
<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato da Empresa</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h1 {
    color: #333;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input,
textarea {
    width: 30%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
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

.img1{
    width: 350px;
    height: 450px;
    margin-left: 850px;
    margin-top: -600px;
}


</style>
<body>

<h1>Entre em Contato</h1>

<!-- Informações de Contato -->
<div>
    <p><strong>Endereço:</strong> rua do seu coração, 96</p>
    <p><strong>Telefone:</strong> (11) 1234-5678</p>
    <p><strong>E-mail:</strong> rendexvouscafe@gmail.com</p>
</div>

<!-- Formulário de Contato -->
<form action="processa_formulario.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

    <button type="submit" formaction="outra_página.php">Enviar</button>
</form>
<div>
    <img class="img1" src="https://marketplace.canva.com/EAE6DyyjHXI/2/0/900w/canva-story-para-mensagem-de-bom-dia-e-de-caf%C3%A9-jLXtEUAE-as.jpg" alt="">
</div>

</body>
</html>
