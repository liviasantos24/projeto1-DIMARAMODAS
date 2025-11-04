<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $sql = "INSERT INTO produtos (nome, preco, estoque)
            VALUES ('$nome', '$preco', '$estoque')";
    
    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
        echo "<h2>Produto cadastrado com sucesso!</h2>";
        echo "<a href='?pg=admin/produtos-admin'>Voltar</a>";
    } else {
        echo "<h2>Cadastro não realizado.</h2>";
    }

} else {
    echo "<h2>Envio de dados não permitido.</h2>";
}
