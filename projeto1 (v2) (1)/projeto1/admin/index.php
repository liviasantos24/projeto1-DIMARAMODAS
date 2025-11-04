<?php
echo "Dimara Modas";
?>

<link rel="stylesheet" href="admin/style.css">

<nav>
    <a href="index.php">Inicio</a>
    <a href="?pg=admin/clientes-admin">Clientes</a>
    <a href="?pg=admin/paginas-admin">Administra Páginas</a>
    <a href="?pg=admin/contato-admin">Administrar Contatos</a>
    <a href="?pg=admin/produtos-admin"> Produtos </a>
</nav>
<?php
// Conteúdo
if(empty($_SERVER["QUERY_STRING"])){
    $var = "principal";
    include_once "$var.php";
}elseif(!empty($_GET['pg'])){
    $pg = $_GET['pg'];
    $pg = str_replace("..", "", $pg); // segurança simples

    // tenta incluir o caminho informado
    if (file_exists("$pg.php")) {
        include_once "$pg.php";
    }
    // se não existir, tenta dentro da pasta admin/
    elseif (file_exists("admin/$pg.php")) {
        include_once "admin/$pg.php";
    }
    // se ainda assim não existir, mostra erro
    else {
        echo "<h2>Página não encontrada</h2>";
    }
}else{
    echo "Página não encontrada";
}
