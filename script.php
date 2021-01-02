
<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}
if (strlen($nome) > 30){
    echo 'Nome muito grande!';
    return;
}
if (!is_numeric($idade)){
    echo "Digite número válido";
    return;
}

if($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
}else if($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolescente')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
}else{
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adulto')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
}