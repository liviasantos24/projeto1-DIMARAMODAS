<?php
    require_once 'config.inc.php';

    $ID = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', estoque = '$estoque' WHERE ID = '$ID'";


    if($resultado = mysqli_query($conexao, $sql)){
        echo "<br><h2>Produto alterado com sucesso!";
        echo "<a href='?pg=admin/produtos-admin'>Voltar</a>";
    }else{
        echo "<br><h3>Erro ao alterar produto</h3>";
        echo "<a href='?pg=admin/produtos-admin'>Voltar</a>";
    }


