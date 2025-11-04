<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Cliente excluído com sucesso!</h2>";
        echo "<a href='?pg=admin/clientes-admin' class='btn-voltar'>Voltar</a>";
    }else{
        echo "<br><h2>Erro ao excluir Cliente.</h2>";
       echo "<a href='?pg=admin/clientes-admin' class='btn-voltar'>Voltar</a>";
    }