<?php
require "config.inc.php";

$id = $_REQUEST["id"];

$sql = "SELECT * FROM produtos WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        $nome = $dados["nome"];
        $preco = $dados["preco"];
        $estoque = $dados["estoque"];
        $id = $dados["ID"];
    }
?>
<h2>Alteração de dados do produto</h2>
<form action="?pg=admin/produtos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>" required><br>
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>" required><br>
    <label>Estoque:</label>
    <input type="text" name="estoque" value="<?=$estoque?>"><br><br>
    <input type="submit" value="Salvar alterações">
</form>
<?php
} else {
    echo "<br><h2>Nenhum produto encontrado</h2>";
}
?>
