<?php
require "config.inc.php";

echo "<h3>Clientes / <a class='btn-add' href='?pg=admin/clientes-cadastro-form'>Cadastrar Cliente</a></h3>";
echo "<h2>Lista de Clientes</h2>";

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "<table class='tabela-clientes'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";

    while($dados = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$dados['id']."</td>";
        echo "<td>".$dados['cliente']."</td>";
        echo "<td>".$dados['cidade']."</td>";
        echo "<td>".$dados['estado']."</td>";
        echo "<td>
                <a class='btn-editar' href='?pg=admin/clientes-altera-form&id=".$dados['id']."'>Alterar</a> 
                <a class='btn-excluir' href='?pg=admin/clientes-excluir&id=".$dados['id']."'>Excluir</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "<p>Nenhum cliente cadastrado ainda.</p>";
}
?>
