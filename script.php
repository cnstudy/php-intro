<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
    $_SESSION['msg-erro'] = 'O nome não pode ser vazio, por favor digite o nome!';
    header('location: index.php');
    return;
} else if (strlen($nome) > 40){
    $_SESSION['msg-erro'] = 'O nome deve conter menos de 40 carácteres!';
    header('location: index.php');
    return;
}else if (!is_numeric($idade)){
    $_SESSION['msg-erro'] = 'Por favor digite apenas números para a idade!';
    header('location: index.php');
    return;
}else if(empty($idade)){
    $_SESSION['msg-erro'] = 'Por favor preencha o campo \'idade\'!';
    header('location: index.php');
    return;
}
if($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            $_SESSION['msg-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}else if($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['msg-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}else{
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adulto') {
            $_SESSION['msg-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}