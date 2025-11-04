<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimara Modas</title>
    <link rel="stylesheet" href="admin/style.css">
</head>
<body>

<?php
echo "<h1>Dimara Modas</h1>";
?>

<nav>
    <a href="index.php">Início</a>
    <a href="?pg=admin/clientes-admin">Clientes</a>
    <a href="?pg=quemsomos">Quem Somos</a>
    <a href="?pg=faleconosco">Fale Conosco</a>
    <a href="?pg=admin/produtos-admin">Produtos</a>
</nav>

<?php
// Conteúdo
if(empty($_SERVER["QUERY_STRING"])){
    $var = "principal";
    include_once "$var.php";
}elseif($_GET['pg']){
    $pg = $_GET['pg'];
    include_once "$pg.php";
}else{
    echo "<p>Página não encontrada</p>";
}
?>

</body>
</html>
