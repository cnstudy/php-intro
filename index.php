<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>formulário para inscrição de competidores</p>
    <form action="script.php" method="post">
        <?php
            $msg_erro = isset($_SESSION['msg-erro']) ? $_SESSION['msg-erro'] : '';
            $msg_sucesso = isset($_SESSION['msg-sucesso']) ? $_SESSION['msg-sucesso'] : '';
            if (!empty($msg_erro)){
                echo $msg_erro;
            }
            if ($msg_sucesso)
                echo $msg_sucesso;
        ?>
        <p>Seu nome: <input type="text" name="nome" id=""></p>
        <p>Sua idade: <input type="text" name="idade" id=""></p>
        <p><input type="submit" value="Enviar dados"></p>
    </form>
</body>
</html>
