<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de inscrição</title>
</head>
<body>

    <h2>Formulario de Inscrição</h2>

    <form action="script.php" method="post">
        <?php
            $errMensage = isset($_SESSION['mensagem de erro'])? $_SESSION['mensagem de erro'] : '';
        ?>

        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
