<?php
require "config.inc.php";

echo "<h3>Produtos / <a class='btn-add' href='?pg=admin/produtos-cadastro-form'>Cadastrar Produto</a></h3>";
echo "<h2>Lista de Produtos</h2>";

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "<table class='tabela-produtos'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Ações</th></tr>";

    while($dados = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$dados['ID']."</td>";
        echo "<td>".$dados['nome']."</td>";
        echo "<td>R$ ".number_format($dados['preco'], 2, ',', '.')."</td>";
        echo "<td>".$dados['estoque']."</td>";
        echo "<td>
                <a class='btn-editar' href='?pg=admin/produtos-altera-form&id=".$dados['ID']."'>Alterar</a> 
                <a class='btn-excluir' href='?pg=admin/produtos-excluir&id=".$dados['ID']."'>Excluir</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "<p class='sem-produto'>Nenhum produto cadastrado ainda.</p>";
}
?>

