<?php

    require_once 'config.inc.php';

    $ID = $_GET['ID'];
    $sql = "DELETE FROM produtos WHERE ID = '$ID'";

    if(mysqli_query($conexao, $sql)){
        echo "<br><h2>Produto Excluído com sucesso.</h2>";
        echo "<a href='?pg=admin/produtos-admin'>Voltar</a>";
    }else{
        echo "<br><h2>Erro ao excluir Produto.</h2>";
        echo "<a href='?pg=admin/produtos-admin'>Voltar</a>";
    }